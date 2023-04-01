<?php

namespace App\Traits;

use Illuminate\Support\Facades\Hash;

trait ManagePasswords
{
    public function hasPassword(string $password): bool
    {
        return Hash::check($password, $this->password);
    }
}