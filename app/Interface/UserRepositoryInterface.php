<?php

namespace App\Interface;

use App\Dto\CreateUserDTO;

interface UserRepositoryInterface
{
    public function getUsers();
    public function createUser(CreateUserDTO $data);
}
