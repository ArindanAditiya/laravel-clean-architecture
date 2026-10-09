<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
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

    public function create()
    {
        return view("users.create");
    }

    public function store(UserStoreRequest $request)
    {
        $user = $this->userService->createUser($request->toDTO());
        // dd($user);
        return redirect()->route("users.index");
    }
}
