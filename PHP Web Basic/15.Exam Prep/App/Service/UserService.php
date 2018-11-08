<?php

namespace App\Service;


use App\Data\UserDTO;
use App\Repository\UserRepository;

class UserService implements UserServiceInterface
{
    /** @var UserRepository */
    private $userRepository;

    public function __construct(UserRepository $repository)
    {
        $this->userRepository = $repository;
    }

    /** @return boolean */
    public function isLogged():bool
    {
        if (isset($_SESSION['id'])){
            return true;
        }else{
            return false;
        }
    }

    public function register(UserDTO $user, string $confirm_password): bool
    {
        if ($user->getPassword() !== $confirm_password){
            throw new \Exception('Password and confirm password miss match');
        }

        $this->password_hash($user);

        return $this->userRepository->insert($user);
    }

    private function password_hash(UserDTO $user):void
    {
        $password = $user->getPassword();
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $user->setPassword($hashed_password);
    }
}