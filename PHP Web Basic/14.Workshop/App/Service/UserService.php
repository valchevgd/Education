<?php

namespace App\Service;


use App\Data\UserDTO;
use App\Repository\UserRepository;

class UserService implements UserServiceInterface
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(UserDTO $user, string $confirm_password): bool
    {
        if ($user->getPassword() !== $confirm_password){
            return false;
        }

        if ($this->userRepository->findOneByUsername($user->getUsername()) !== null){
            return false;
        }

       $this->password_hash($user);

        return $this->userRepository->insert($user);
    }

    public function login(string $username, string $password): bool
    {
        $current_user = $this->userRepository->findOneByUsername($username);

        if ($current_user === null){
            return false;
        }

        if (!password_verify($password, $current_user->getPassword())){
            return false;
        }

        $_SESSION['id'] = $current_user->getId();
        return true;
    }

    public function edit( UserDTO $user): bool
    {

        $this->password_hash($user);
        return $this->userRepository->update($_SESSION['id'], $user);
    }

    /** @return \Generator|UserDTO[] */
    public function viewAll(): \Generator
    {
        return $this->userRepository->findAll();
    }

    public function isLogged(): bool
    {
        if ($_SESSION){
            return true;
        }else{
            return false;
        }
    }

    public function getCurrentUser(): ?UserDTO
    {
        if (!isset($_SESSION['id'])){
            return null;
        }

        return $this->userRepository->findOne($_SESSION['id']);
    }


    private function password_hash(UserDTO $user)
    {
        $password = $user->getPassword();
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $user->setPassword($hash_password);
    }

    public function delete(UserDTO $user): bool
    {
       return $this->userRepository->delete($user);
    }
}