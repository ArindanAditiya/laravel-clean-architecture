<?php

namespace App\Http\Controllers;

use App\Service\UserService;

class UserController extends Controller
{
    public function __construct(
        protected UserService $userService
    ) {}

    public function index()
    {
        $users = $this->userService->getDataUser();
        return $users;
    }
}
