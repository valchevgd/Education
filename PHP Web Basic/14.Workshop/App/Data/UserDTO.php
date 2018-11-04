<?php

namespace App\Data;


class UserDTO
{

    private $id;
    private $username;
    private $password;
    private $firstName;
    private $lastName;
    private $bornOn;

    public static function create($username, $password, $first_name, $last_name, $born_on, $id = null):UserDTO
    {
        $user = new UserDTO();

        $user->setUsername($username)
            ->setPassword($password)
            ->setFirstName($first_name)
            ->setLastName($last_name)
            ->setBornOn($born_on);

        return $user;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username): UserDTO
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password): UserDTO
    {
        $this->password = $password;
        return $this;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName): UserDTO
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName): UserDTO
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getBornOn()
    {
        return $this->bornOn;
    }

    public function setBornOn($bornOn): UserDTO
    {
        $this->bornOn = $bornOn;
        return $this;
    }


}