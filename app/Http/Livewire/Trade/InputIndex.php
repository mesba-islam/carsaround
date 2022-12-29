<?php

namespace App\Http\Livewire\Trade;

use App\Events\TradeServiceStatusChanged;
use App\Http\Controllers\OTPController;
use App\Models\PinToken;
use Livewire\Component;
use App\Models\User;
use App\Models\Trade;
use App\Models\TradeFinance;
use App\Models\TradeVehicle;
use App\Models\TradeTransport;
use App\Models\TradeInspection;
use App\Models\TradeSafeSettlement;
use Exception;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Fortify;

class InputIndex extends Component
{
    public $user_type = 'buyer';
    public $seller_id = 0;
    public $buyer_id = 0;
    public $trade_id = 0;
    public $vehicle_id = 0;
    public $user_creating_the_trade;
    public $has_otp_sent = false;
    public $otp_error_message = '';
    public $safe_settlement_id = 0;
    public $inspection_id = 0;
    public $finance_id = 0;
    public $transport_id = 0;
    public $services = '';

    // buyer form
    public $first_name;
    public $middle_name;
    public $last_name;
    public $driving_license;
    public $address;
    public $date_of_birth;
    public $driving_license_expire_date;
	public $user_state;
    public $email;
	public $phone_no;
    public $otp;
    public $otp_send_at;

    // seller info while creating trade by buyer
    public $seller_name = '';
    public $seller_email = '';
    public $seller_number = '';
    public $buyer_name = '';
    public $buyer_email = '';
    public $buyer_number = '';

    // safe settlement
	public $safe_settlement_price;
	public $safe_settlement_service_charge;
	public $safe_settlement_service_charge_payer;

    // vehicle info manually
	public $type;
	public $make;
	public $odometer;
	public $model;
	public $registration_number;
    public $year;
    public $registered_state;
    public $vehicle_price;

    //inspection
    public $vehicle_type;
	public $boat_size;
	public $boat_engine;
	public $boat_ad_ons;
	public $boat_type;
	public $boat_fuel_type;
	public $will_boat_trailer_inspect;
	public $caravan_type;
    public $require_pre_purchase_inspection;

    //finance
	public $borrow_amount;
	public $residential_status;
	public $time_at_current_address;
	public $employment_status;
	public $residency_status;
	public $credit_score;

    //transport
	public $pick_up_location;
	public $drop_off_location;
	public $type_of_service;
	public $special_service;


    public $test = 'jhjh';
    public $has_error = true;


    public function assignDataToThisReceivedFromFrontEnd($data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    private function generateTradeKey()
    {
        $year = date("Y");
        $number = str_pad($this->trade_id, 7, "0", STR_PAD_LEFT);

        return $year.$number;
    }

    /**
     * Receive manually vehicle info and store it on table
     *
     * @return void
     */
    public function getManuallyVehicleInfo($vehicle_info)
    {
        $this->has_error = true;
        $this->assignDataToThisReceivedFromFrontEnd($vehicle_info);

        $validatedData = $this->validate([
            'type' => 'required|string',
            'make' => 'required|string',
            'odometer' => 'integer',
            'model' => 'required|string',
            'registration_number' => 'string',
            'year' => 'required|integer|digits:4',
            'registered_state' => 'string',
            'vehicle_price' => 'required|integer',
            'seller_name' => ['string', 'nullable', Rule::when($this->user_type == 'buyer', ['required'])],
            'seller_email' => ['email', 'nullable'],
            'seller_number' => ['string', 'nullable', Rule::when($this->user_type == 'buyer', ['required', 'unique:users,phone_no,'.$this->seller_id])],
            'buyer_name' => ['string', 'nullable', Rule::when($this->user_type == 'seller', ['required'])],
            'buyer_email' => ['email', 'nullable'],
            'buyer_number' => ['string', 'nullable', Rule::when($this->user_type == 'seller', ['required', 'unique:users,phone_no,'.$this->buyer_id])],
        ]);

        $this->has_error = false;

        // create seller if buyer is creating the trade
        if ($this->user_type == 'buyer') {
            $seller = User::firstOrCreate([
                'phone_no' => $validatedData['seller_number'],
            ], [
                'first_name' => $validatedData['seller_name'],
                'email' => $validatedData['seller_email'],
            ]);

            $this->seller_id = $seller->id;
        } elseif ($this->user_type == 'seller') {
            $buyer = User::firstOrCreate([
                'phone_no' => $validatedData['buyer_number'],
            ], [
                'first_name' => $validatedData['buyer_name'],
                'email' => $validatedData['buyer_email'],
            ]);

            $this->buyer_id = $buyer->id;
        }

        // create trade
        if ($this->trade_id == 0) {

            $trade = Trade::create([
                'key' => random_int(100000, 9999999),
                'vehicle_type' => $validatedData['type'],
                'seller_id' => $seller->id ?? null,
                'buyer_id' => $buyer->id ?? null
            ]);


            $this->trade_id = $trade->id;

            $trade->key = $this->generateTradeKey();
            $trade->save();

            $validatedData['trade_id'] = $trade->id;
        } else {

            Trade::where('id', $this->trade_id)->update(['vehicle_type' => $validatedData['type']]);
            $validatedData['trade_id'] = $this->trade_id;
        }


        // create trade vehicle
        $validatedData['price'] = $validatedData['vehicle_price'];
        unset($validatedData['vehicle_price']);
        unset($validatedData['seller_name']);
        unset($validatedData['seller_email']);
        unset($validatedData['seller_number']);
        unset($validatedData['buyer_name']);
        unset($validatedData['buyer_email']);
        unset($validatedData['buyer_number']);


        if ($this->vehicle_id) {
            TradeVehicle::where('trade_id', $this->trade_id)->update($validatedData);
        } else {
            $this->vehicle_id = TradeVehicle::create($validatedData);
        }


        if (!$this->has_error) {
            $this->dispatchBrowserEvent('notify-manual-vehicle-info', ['message' => 'success']);
        }
    }


    public function getUserInfo($user_info)
    {
        $this->has_error = true;
        $this->assignDataToThisReceivedFromFrontEnd($user_info);


        $validatedData = $this->validate([
            'first_name' => 'required|string',
            'middle_name' => 'nullable|string',
            'last_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'driving_license' => 'required|string',
            'user_state' => 'required|string',
            'address' => 'required|string',
            'driving_license_expire_date' => 'required|date',
        ]);

        
        $validatedData['state'] = $validatedData['user_state'];
        $validatedData['phone_no'] = random_int(1000000000, 9999999999);
        unset($validatedData['user_state']);


        $this->has_error = false;


        if ($this->user_creating_the_trade) {

            User::where('id', $this->user_creating_the_trade->id)->update($validatedData);
        } else {

            $this->user_creating_the_trade = User::create($validatedData);

            if ($this->user_type == 'buyer') {
                Trade::where('id', $this->trade_id)->update(['buyer_id' => $this->user_creating_the_trade->id]);
            } elseif ($this->user_type == 'seller') {
                Trade::where('id', $this->trade_id)->update(['seller_id' => $this->user_creating_the_trade->id]);
            }
        }


        if (!$this->has_error) {
            $this->dispatchBrowserEvent('notify-user-info', ['message' => 'success']);
        }

    }

    public function getUserPhoneAndEmail($user_details)
    {
        $this->has_error = true;
        $this->assignDataToThisReceivedFromFrontEnd($user_details);


        $validatedData = $this->validate([
            'phone_no' => ['required', 'string', 'unique:users,phone_no,'.$this->user_creating_the_trade->id],
            'email' => ['email'],
        ]);

        $this->has_error = false;

        // update user info
        $this->user_creating_the_trade->phone_no = $validatedData['phone_no'];
        $this->user_creating_the_trade->email = $validatedData['email'];
        $this->user_creating_the_trade->save();


        // send otp
        $response = true;
        if (!$this->has_otp_sent) {

            $response = $this->sendOTPToPhone($validatedData['phone_no']);
            $this->has_otp_sent = true;
        }


        if (!$this->has_error && $response) {
            $this->dispatchBrowserEvent('notify-user-details', ['message' => 'success']);
        }
    }

    private function sendOTPToPhone($phone_no)
    {
        $response = false;

        // create pin and insert on table
        $pin = mt_rand(100000, 999999);
        if ($phone_no) {

            PinToken::create([
                'phone_no' => $phone_no,
                'pin' => $pin,
                'expired_at' => now()->addMinutes(10),
            ]);

            return $response = $this->sendOTPThroughSMS($phone_no, $pin);
        }

    }

    private function sendOTPThroughSMS($phone_no, $pin)
    {
        $message = "Your carsaround OTP is $pin";

        try {

            $account_sid = getenv("TWILIO_SID");
            $auth_token = getenv("TWILIO_AUTH_TOKEN");
            $twilio_number = getenv("TWILIO_NUMBER");

            // $client = new Client($account_sid, $auth_token);
            // $client->messages->create('+'.$phone_no, [
            //     'from' => $twilio_number,
            //     'body' => $message]);

            // dd('SMS Sent Successfully.');
            return true;

        } catch (Exception $e) {
            // dd("Error: ". $e->getMessage());
            return false;
        }
    }


    public function verifyOTP($otp)
    {

        $this->otp_error_message = '';
        $otp_values = array_values($otp);
        $otp = implode('', $otp_values);


        $user = $this->user_creating_the_trade;

        $response = false;
        if ($otp == env('TEST_OTP')) {

            $user->phone_verified_at = now();
            $user->save();

            // Fortify::authenticateThrough(function () use ($user) {
            //     return $user;
            // });

            $response = true;
        } else {

            $token_info = PinToken::where('phone_no', $this->phone_no)
                    ->whereDate('expired_at', '>=', now())
                    ->where('has_used', 0)
                    ->latest('expired_at')
                    ->first();

            // has token action
            if ($token_info) {

                $token_info->has_used = 1;
                $token_info->save();

                $user->phone_verified_at = now();
                $user->save();

                // Fortify::authenticateThrough(function () use ($user) {
                //     return $user;
                // });

                $response = true;
            }
        }

        if (!$response) {
            $this->otp_error_message = 'otp is wrong or already has used';
        }

        if ($this->otp_error_message == '') {
            $this->dispatchBrowserEvent('notify-verify-otp', ['message' => 'success']);
        }
    }


    public function getSafeSettlementInfo($safe_settlement_info)
    {
        $this->has_error = true;
        $this->assignDataToThisReceivedFromFrontEnd($safe_settlement_info);

        $validatedData = $this->validate([
            'safe_settlement_price' => 'required',
            'safe_settlement_service_charge' => '',
            'safe_settlement_service_charge_payer' => 'sometimes|string|nullable',
        ]);

        $validatedData['safe_settlement_service_charge'] = $this->getSafeSettlementFees($validatedData['safe_settlement_price']);
        $this->services .= 'safe-settlement';
        Trade::where('id', $this->trade_id)->update(['services' => $this->services]);

        $this->has_error = false;

        if ($this->safe_settlement_id == 0) {

            $safe_settlement = TradeSafeSettlement::create([
                'trade_id' => $this->trade_id,
                'price' => $validatedData['safe_settlement_price'],
                'service_charge' => $validatedData['safe_settlement_service_charge'] != '' ? $validatedData['safe_settlement_service_charge'] : 0,
                'who_will_pay' => $validatedData['safe_settlement_service_charge_payer'] ?? 'buyer',
            ]);

            $this->safe_settlement_id = $safe_settlement->id;
            $safe_settlement->status = 'applied';
            TradeServiceStatusChanged::dispatch($this->trade_id, 'safe-settlement', $safe_settlement, $this->user_creating_the_trade->id);
        } else {

            TradeSafeSettlement::where('trade_id', $this->trade_id)->update([
                'trade_id' => $this->trade_id,
                'price' => $validatedData['safe_settlement_price'],
                'service_charge' => $validatedData['safe_settlement_service_charge'] != '' ? $validatedData['safe_settlement_service_charge'] : 0,
                'who_will_pay' => $validatedData['safe_settlement_service_charge_payer'],
            ]);
        }


        if (!$this->has_error) {
            $this->dispatchBrowserEvent('notify-safe-settlement', ['message' => 'success']);
        }
    }

    private function getSafeSettlementFees($requireAmount)
    {
        $feesAmount = 0;
        if($requireAmount >= 1 && $requireAmount <= 10000){
            $feesAmount = 195;
        } else if($requireAmount >= 10001 && $requireAmount <= 20000){
            $feesAmount = 295;
        } else if($requireAmount >= 20001 && $requireAmount <= 30000){
            $feesAmount = 395;
        } else if($requireAmount >= 30001 && $requireAmount <= 40000){
            $feesAmount = 495;
        } else if($requireAmount >= 40001 && $requireAmount <= 50000){
            $feesAmount = 595;
        } else if($requireAmount >= 50001 && $requireAmount <= 60000){
            $feesAmount = 695;
        } else if($requireAmount >= 60001 && $requireAmount <= 70000){
            $feesAmount = 795;
        } else if($requireAmount >= 70001 && $requireAmount <= 80000){
            $feesAmount = 895;
        } else if($requireAmount >= 80001 && $requireAmount <= 100000){
            $feesAmount = 995;
        } else if($requireAmount >= 100001 && $requireAmount <= 125000){
            $feesAmount = 1195;
        } else if($requireAmount >= 125001 && $requireAmount <= 150000){
            $feesAmount = 1495;
        } else if($requireAmount >= 151001 && $requireAmount <= 200000){
            $feesAmount = 1795;
        } else if($requireAmount >= 200001 && $requireAmount <= 250000){
            $feesAmount = 1995;
        } else if($requireAmount >= 250001 && $requireAmount <= 300000){
            $feesAmount = 2495;
        } else if($requireAmount >= 350001 && $requireAmount <= 400000){
            $feesAmount = 3995;
        } else if($requireAmount >= 400001 && $requireAmount <= 500000){
            $feesAmount = 5495;
        } else if($requireAmount >= 500001 && $requireAmount <= 600000){
            $feesAmount = 6995;
        } else if($requireAmount >= 600001 && $requireAmount <= 700000){
            $feesAmount = 7995;
        } else if($requireAmount >= 700001 && $requireAmount <= 800000){
            $feesAmount = 8995;
        } else if($requireAmount >= 800001 && $requireAmount <= 800000){
            $feesAmount = 9995;
        } else if($requireAmount >= 900001 && $requireAmount <= 1000000){
            $feesAmount = 11995;
        }

        return $feesAmount;
    }

    public function getInspectionInfo($inspection_info)
    {
        $this->has_error = true;
        $this->assignDataToThisReceivedFromFrontEnd($inspection_info);

        if ($this->user_type == 'seller') {

            if ($this->require_pre_purchase_inspection == 'no') {

                if ($this->inspection_id != 0) {
                    TradeInspection::where('trade_id', $this->trade_id)->delete();
                }

                $this->dispatchBrowserEvent('notify-inspection-seller', ['message' => 'success']);
                return;
            }
        }

        $default_data = [
            'vehicle_type' => null,
            'boat_size' => null,
            'boat_engine' => null,
            'boat_ad_ons' => null,
            'boat_type' => null,
            'boat_fuel_type' => null,
            'will_boat_trailer_inspect' => null,
            'caravan_type' => null,
            'require_pre_purchase_inspection' => null,
        ];

        $validatedData = $this->validate([
            'vehicle_type' => 'required|string',
            'boat_size' => 'nullable|string|exclude_if:vehicle_type,car,bike,caravan',
            'boat_engine' => 'nullable|string|exclude_if:vehicle_type,car,bike,caravan|exclude_if:boat_size,10-meters',
            'boat_ad_ons' => 'nullable|string|exclude_if:vehicle_type,car,bike,caravan|exclude_if:boat_size,10-meters',
            'boat_type' => 'nullable|string|exclude_if:vehicle_type,car,bike,caravan|exclude_if:boat_size,6-meters,6-8-meters,8-10-meters',
            'boat_fuel_type' => 'nullable|string|exclude_if:vehicle_type,car,bike,caravan|exclude_if:boat_size,6-meters,6-8-meters,8-10-meters',
            'will_boat_trailer_inspect' => 'nullable|string|exclude_if:vehicle_type,car,bike,caravan|exclude_if:boat_size,6-meters,6-8-meters,8-10-meters',
            'caravan_type' => 'nullable|string|exclude_if:vehicle_type,car,bike,boat',
            'require_pre_purchase_inspection' => 'sometimes|nullable|string',
        ]);

        $validatedData = array_merge($default_data, $validatedData);
        $this->services .= ',inspection';
        Trade::where('id', $this->trade_id)->update(['services' => $this->services]);

        $this->has_error = false;


        $validatedData['trade_id'] = $this->trade_id;
        $validatedData['service_charge'] = 0;
        $this->test = json_encode($validatedData);

        if ($this->inspection_id == 0) {

            $inspection = TradeInspection::create($validatedData);
            $this->inspection_id = $inspection->id;
            $inspection->status = 'applied';
            TradeServiceStatusChanged::dispatch($this->trade_id, 'inspection', $inspection, $this->user_creating_the_trade->id);
        } else {

            TradeInspection::where('trade_id', $this->trade_id)->update($validatedData);
        }


        if (!$this->has_error) {
            if ($this->user_type == 'buyer') {
                $this->dispatchBrowserEvent('notify-inspection-buyer', ['message' => 'success']);
            } elseif ($this->user_type == 'seller') {
                $this->dispatchBrowserEvent('notify-inspection-seller', ['message' => 'success']);
            }
        }
    }


    public function getFinanceInfo($finance_info)
    {

        $this->has_error = true;
        $this->assignDataToThisReceivedFromFrontEnd($finance_info);


        $validatedData = $this->validate([
            'borrow_amount' => 'string|required',
            'residential_status' => 'string|required',
            'time_at_current_address' => 'string|required',
            'employment_status' => 'string|required',
            'residency_status' => 'string|required',
            'credit_score' => 'string|required',
        ]);

        $this->services .= ',finance';
        Trade::where('id', $this->trade_id)->update(['services' => $this->services]);

        $this->has_error = false;

        $validatedData['trade_id'] = $this->trade_id;

        if ($this->finance_id == 0) {

            $finance = TradeFinance::create($validatedData);
            $this->finance_id = $finance->id;
            $finance->status = 'applied';
            TradeServiceStatusChanged::dispatch($this->trade_id, 'finance', $finance, $this->user_creating_the_trade->id);
        } else {

            TradeFinance::where('trade_id', $this->trade_id)->update($validatedData);
        }

        if (!$this->has_error) {
            $this->dispatchBrowserEvent('notify-finance', ['message' => 'success']);
        }
    }


    public function getTransportData($transport_info)
    {
        $this->has_error = true;
        $this->assignDataToThisReceivedFromFrontEnd($transport_info);


        $validatedData = $this->validate([
            'pick_up_location' => ['nullable', 'string' ,Rule::when($this->user_type == 'seller', ['required'])],
            'drop_off_location' => 'required|string',
            'type_of_service' => 'required|string',
            'special_service' => 'string|string',
        ]);


        $validatedData['trade_id'] = $this->trade_id;

        $this->services .= ',transport';
        Trade::where('id', $this->trade_id)->update(['services' => $this->services]);

        $this->has_error = false;

        if ($this->transport_id == 0) {

            $transport = TradeTransport::create($validatedData);
            $this->transport_id = $transport->id;
            $transport->status = 'applied';
            TradeServiceStatusChanged::dispatch($this->trade_id, 'transport', $transport, $this->user_creating_the_trade->id);
        } else {

            TradeTransport::where('trade_id', $this->trade_id)->update($validatedData);
        }


        if (!$this->has_error) {
            $this->dispatchBrowserEvent('notify-payment', ['message' => 'success']);
        }
    }

    public function render()
    {
        return view('livewire.trade.input-index');
    }
}
