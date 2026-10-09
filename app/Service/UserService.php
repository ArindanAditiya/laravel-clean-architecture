<?php

namespace App\Service;

use App\Interface\UserRepositoryInterface;
use App\Repository\UserRepository;

class UserService
{
    public $repository;
    public function __construct(UserRepositoryInterface $repository) {
        $this->repository = $repository;
    }

    public function getDataUser() 
    {
        try {
            $users = $this->repository->getUsers();
            return $users;
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
