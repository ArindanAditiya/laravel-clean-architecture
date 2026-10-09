<?php

namespace App\Repository;

use App\Dto\CreateUserDTO;
use App\Interface\UserRepositoryInterface;
use App\Models\User;


class UserRepository implements UserRepositoryInterface
{
    public function getUsers()
    {
        $users = User::all();
        return $users;
    }

    public function createUser(CreateUserDTO $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return $user;
    }
}
