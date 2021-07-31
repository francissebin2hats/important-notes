<?php

namespace App\Services;

use App\Models\User;

class UserData
{
    public function getUserData()
    {
        return User::all();
    }
}
