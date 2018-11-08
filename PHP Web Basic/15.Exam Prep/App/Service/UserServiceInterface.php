<?php

namespace App\Service;


use App\Data\UserDTO;

interface UserServiceInterface
{
    public function isLogged():bool;

    public function register(UserDTO $user, string $confirm_password):bool;
}