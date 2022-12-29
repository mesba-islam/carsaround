<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeVehicle extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function trade(){
        return $this->belongsTo(Trade::class);
    }
}
