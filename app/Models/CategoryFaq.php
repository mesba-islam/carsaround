<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryFaq extends Model
{
    use HasFactory;
    protected $guarded = [];

    Public function faq()
    {
        return $this->belongsToMany(Faq::class)->withTimestamps();
    }
}
