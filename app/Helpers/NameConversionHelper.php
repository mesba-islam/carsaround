<?php

namespace App\Helpers;

use App\Models\User;

class NameConversionHelper
{
    public function generateFullName(User $user)
    {
        $full_name = '';

        if ($user->first_name) {
            $full_name .= $user->first_name;
        }

        if ($user->middle_name) {
            $full_name .= ' '. $user->middle_name;
        }

        if ($user->last_name) {
            $full_name .= ' '. $user->last_name;
        }

        return $full_name;
    }

    public static function generateAuthUserFullName()
    {
        $user = auth()->user();
        $full_name = '';

        if ($user->first_name) {
            $full_name .= $user->first_name;
        }

        if ($user->middle_name) {
            $full_name .= ' '. $user->middle_name;
        }

        if ($user->last_name) {
            $full_name .= ' '. $user->last_name;
        }

        return $full_name;
    }
}

