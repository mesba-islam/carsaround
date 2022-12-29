<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeInstruction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class, 'id', 'created_by');
    }

    public function trade(){
        return $this->belongsTo(Trade::class);
    }

    public function inspection_note()
    {
        return $this->belongsTo(TradeInspection::class, 'service_id', 'id');
    }

}
