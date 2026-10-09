<?php

namespace App\Repository;

use App\Interface\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getUsers()
    {
        $users = User::all();
        return $users;
    }
}
