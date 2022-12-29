<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function buyer(){
        return $this->belongsTo(User::class, 'buyer_id', 'id');
    }

    public function seller(){
        return $this->belongsTo(User::class, 'seller_id', 'id');
    }

    public function safe_settlements(){
        return $this->hasOne(TradeSafeSettlement::class);
    }

    public function trade_documents(){
        return $this->hasMany(TradeDocument::class);
    }

    public function trade_finances(){
        return $this->hasOne(TradeFinance::class);
    }

    public function trade_inspections(){
        return $this->hasOne(TradeInspection::class);
    }

    public function trade_teams(){
        return $this->hasMany(TradeTeam::class);
    }

    public function trade_notes(){
        return $this->hasMany(TradeInstruction::class);
    }

    public function trade_transports(){
        return $this->hasOne(TradeTransport::class);
    }

    public function trade_vehicle(){
        return $this->hasOne(TradeVehicle::class);
    }

    public function service_statuses()
    {
        return $this->hasMany(TradeServiceStatus::class);
    }

    public function get_specific_service_statuses($service_name)
    {
        return TradeServiceStatus::where('service', $service_name)->where('trade_id', $this->id)->get();
    }

    public function has_service_status($tradeServiceStatus, $status)
    {
        return $tradeServiceStatus->contains(function ($key, $value) use ($status) {
            return $key->status == $status;
        });
    }

    public function get_service_status_date($tradeServiceStatus, $status)
    {
        $date = '';

        foreach ($tradeServiceStatus as $key => $value) {
            if ($value->status == $status) {
                $date = $value->created_at->format('d M Y');
                break;
            }
        }

        return $date;
    }

    public function get_service_status_time($tradeServiceStatus, $status)
    {
        $date = '';

        foreach ($tradeServiceStatus as $key => $value) {
            if ($value->status == $status) {
                $date = $value->created_at->format('H:i a');
                break;
            }
        }

        return $date;
    }

}
