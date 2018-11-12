<?php

namespace App\Service;


use App\Data\UserDTO;

interface UserServiceInterface
{
    public function isLogged():bool;

    public function register(UserDTO $user, string $confirm_password):bool;

    public function login(string $username, string $password):bool;

    public function getCurrentUser(int $user_id):UserDTO;

    public function delete(int $id, string $password):bool;

}