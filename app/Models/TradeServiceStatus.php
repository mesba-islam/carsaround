<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeServiceStatus extends Model
{
    use HasFactory, Uuids;

    protected $guarded = [];

    public function trade()
    {
        return $this->belongsTo(Trade::class);
    }
}
