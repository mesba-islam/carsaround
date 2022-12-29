<?php

namespace App\Http\Controllers;

use App\Models\PinToken;
use Exception;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class OTPController extends Controller
{
    public function getOTP(Request $request)
    {
        // echo json_encode(['test' => 'testing ']);

        $response = false;

        // create pin and insert on table
        $pin = mt_rand(100000, 999999);
        if ($request->phone_no) {

            PinToken::create([
                'phone_no' => $request->phone_no,
                'pin' => $pin,
                'expired_at' => now()->addMinutes(2),
            ]);

            $response = $this->sendOTPThroughSMS($request->phone_no, $pin);
        }

        // send sms

        if ($response) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'failed']);
        }
    }

    private function sendOTPThroughSMS($phone_no, $pin)
    {
        $message = "OTP: ". $pin. ". Use this otp to login";

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
            dd("Error: ". $e->getMessage());
            return false;
        }
    }

}
