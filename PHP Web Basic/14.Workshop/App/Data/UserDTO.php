<?php

namespace App\Data;


use MongoDB\BSON\Timestamp;

class UserDTO
{

    private $id;


    private $username;


    private $password;


    private $firstName;


    private $lastName;


    private $bornOn;

    public static function create($username, $password, $firstName, $lastName, $bornOn, $id = null) : UserDTO
    {
        $user = new UserDTO();

        $user->setUsername($username)
            ->setPassword($password)
            ->setFirstName($firstName)
            ->setLastName($lastName)
            ->setBornOn($bornOn);

        return $user;

    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }


    public function getUsername(): string
    {
        return $this->username;
    }


    public function setUsername(string $username): UserDTO
    {
        $this->username = $username;
        return $this;
    }


    public function getPassword(): string
    {
        return $this->password;
    }


    public function setPassword(string $password): UserDTO
    {
        $this->password = $password;
        return $this;
    }


    public function getFirstName(): string
    {
        return $this->firstName;
    }


    public function setFirstName(string $firstName): UserDTO
    {
        $this->firstName = $firstName;
        return $this;
    }


    public function getLastName(): string
    {
        return $this->lastName;
    }


    public function setLastName(string $lastName): UserDTO
    {
        $this->lastName = $lastName;
        return $this;
    }


    public function getBornOn()
    {
        return $this->bornOn;
    }


    public function setBornOn( $bornOn): UserDTO
    {
        $this->bornOn = $bornOn;
        return $this;
    }

}