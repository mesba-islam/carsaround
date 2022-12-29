<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeTeam extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function trade(){
        return $this->belongsTo(Trade::class);
    }

    public function trade_teams(){
        return $this->hasMany(TradeMember::class);
    }

}
