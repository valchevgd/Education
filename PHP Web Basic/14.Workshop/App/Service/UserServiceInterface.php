<?php

namespace App\Service;


use App\Data\UserDTO;

interface UserServiceInterface
{
    public function register(UserDTO $user, string $confirm_password):bool;

    public function login(string $username, string $password):bool;

    public function edit(int $id, UserDTO $user):bool;

    /** @return \Generator|UserDTO[] */
    public function viewAll():\Generator;

    public function isLogged():bool;

    public function getCurrentUser():?UserDTO;

    public function delete(int $id, string $password):bool;
}