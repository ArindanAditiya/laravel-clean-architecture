<?php

namespace App\Dto;

class CreateUserDTO
{
    /**
     * Create a new class instance.
     */

    public $name, $email, $password;

    public function __construct(array $data)
    {
        $this->name = $data["name"];
        $this->email = $data["email"];
        $this->password = $data["password"];
        // $this->password_confirmation = $data["password_confirmation"];
    }
}
