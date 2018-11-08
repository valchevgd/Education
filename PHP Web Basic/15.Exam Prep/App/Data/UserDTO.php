<?php

namespace App\Data;


use Exception;

class UserDTO
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    public static function create(string $username, string $password, string $first_name, string $last_name):UserDTO
    {
        $user = new UserDTO();

        $user->setUsername($username)
            ->setPassword($password)
            ->setFirstName($first_name)
            ->setLastName($last_name);

        return $user;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     * @return UserDTO
     * @throws Exception
     */
    public function setUsername(string $username): UserDTO
    {
        if (strlen($username) < 4){
            throw new Exception('Username must be at least 4 symbols');
        }elseif (strlen($username) > 255){
            throw new Exception('Are you serious?! Way tooooo loooog!');
        }

        $this->username = $username;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return UserDTO
     * @throws Exception
     */
    public function setPassword(string $password): UserDTO
    {
        if (strlen($password) < 6){
            throw new Exception('Password must be at least 6 symbols');
        }elseif (strlen($password) > 255){
            throw new Exception('Are you serious?! Way tooooo loooog!');
        }

        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return UserDTO
     * @throws Exception
     */
    public function setFirstName(string $firstName): UserDTO
    {
        if (strlen($firstName) < 3){
            throw new Exception('First name must be at least 3 symbols');
        }elseif (strlen($firstName) > 255){
            throw new Exception('Are you serious?! Way tooooo loooog!');
        }

        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return UserDTO
     * @throws Exception
     */
    public function setLastName(string $lastName): UserDTO
    {
        if (strlen($lastName) < 3){
            throw new Exception('First name must be at least 3 symbols');
        }elseif (strlen($lastName) > 255){
            throw new Exception('Are you serious?! Way tooooo loooog!');
        }

        $this->lastName = $lastName;

        return $this;
    }


}