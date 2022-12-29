<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeMember extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function trade_team(){
        return $this->belongsTo(TradeTeam::class, 'id', 'trade_team_id');
    }

}
