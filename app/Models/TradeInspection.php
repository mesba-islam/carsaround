<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeInspection extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function trade(){
        return $this->belongsTo(Trade::class);
    }

    public function instruction()
    {
        return $this->hasOne(TradeInstruction::class, 'service_id');
    }
}
