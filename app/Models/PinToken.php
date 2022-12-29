<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinToken extends Model
{
    use HasFactory, Uuids;

    protected $fillable = [
        'phone_no',
        'pin',
        'expired_at',
    ];

    protected $casts = [
        'expired_at' => 'datetime'
    ];

    public function referable()
    {
        return $this->morphTo();
    }

    public function isExpired()
    {
        return $this->expired_at->isPast();
    }

    public function extendExpiry($minutes = 2)
    {
        $this->update([
            'expired_at' => now()->addMinutes($minutes)
        ]);
    }
}
