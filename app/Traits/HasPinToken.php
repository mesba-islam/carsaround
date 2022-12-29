<?php

namespace App\Traits;

trait HasPinToken
{
    public function pinTokens()
    {
        return $this->morphMany(PinToken::class, 'referable')->latest();
    }

    public function createPasscode($type = null)
    {
        return $this->pinTokens()->create([
            'reference_token' => \Str::random(60),
            'pin' => mt_rand(100000, 999999),
            'expired_at' => now()->addMinutes(2),
            'reference_type' => $type ?? 'verification-passcode'
        ]);
    }
}
