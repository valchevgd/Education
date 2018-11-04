<?php

namespace App\Service;


use App\Data\UserDTO;
use App\Repository\UserRepository;

class UserService implements UserServiceInterface
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register(UserDTO $user, string $confirm_password): bool
    {
        /** @var UserDTO[] $all_users */
        $all_users = $this->userRepository->findAll();
        foreach ($all_users as $current){
            if ($current->getUsername() === $user->getUsername()){
                throw new \Exception('Username is already taken!');
            }
        }
        if ($user->getPassword() !== $confirm_password) {
            throw new \Exception('Password does not match.');
        }
        $this->hashPassword($user);

        return $this->userRepository->insert($user);

    }

    public function login(string $username, string $password): bool
    {
        $user = $this->userRepository->findOneByUsername($username);

        if (password_verify($password, $user->getPassword())) {
            $_SESSION['id'] = $user->getId();
            return true;
        }else{
            return false;
        }

    }

    public function edit(int $id, UserDTO $user): bool
    {
        $this->hashPassword($user);

        return $this->userRepository->update($user);
    }

    /** @return \Generator|UserDTO[] */
    public function viewAll(): \Generator
    {
        return $this->userRepository->findAll();
    }

    public function isLogged(): bool
    {
        if ($_SESSION) {
            return true;
        } else {
            return false;
        }
    }

    public function getCurrentUser(): ?UserDTO
    {
        return $this->userRepository->findOne($_SESSION['id']);
    }


    public function hashPassword(UserDTO $user)
    {
        $password = $user->getPassword();
        $hash_password = password_hash($password, PASSWORD_DEFAULT);
        $user->setPassword($hash_password);
    }

    public function delete($id, $password): bool
    {

        $user = $this->userRepository->findOne($id);

        if (password_verify($password, $user->getPassword())){
            return $this->userRepository->delete($id);
        }else{
            throw new \Exception('Wrong password!');
        }

    }
}