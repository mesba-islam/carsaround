<?php

namespace App\Models;

use App\Traits\HasPinToken;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasPinToken, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function documents()
    {
        return $this->hasMany(UserDocument::class);
    }


    public function trades(){
        return $this->hasMany(Trade::class);
    }

    public function trade_team_members(){
        return $this->hasMany(TradeMember::class);
    }

    public function trade_documents(){
        return $this->hasMany(TradeDocument::class, 'created_by');
    }

    public function trade_notes(){
        return $this->hasMany(TradeNote::class, 'created_by');
    }

    public function posts(){
        return $this->hasMany(Post::class);
    }

}
