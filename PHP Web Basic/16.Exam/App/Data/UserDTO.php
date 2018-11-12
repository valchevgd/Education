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
    private $fullName;

    private $bornOn;

    public static function create(string $username, string $password, string $full_name, $born_on):UserDTO
    {
        $user = new UserDTO();

        $user->setUsername($username)
            ->setPassword($password)
            ->setFullName($full_name)
            ->setBornOn($born_on);

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
        if (strlen($password) < 4){
            throw new Exception('Password must be at least 4 symbols');
        }elseif (strlen($password) > 255){
            throw new Exception('Are you serious?! Way tooooo loooog!');
        }

        $this->password = $password;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->fullName;
    }

    /**
     * @param string $fullName
     * @return UserDTO
     * @throws Exception
     */
    public function setFullName(string $fullName): UserDTO
    {
        if (strlen($fullName) < 5){
            throw new Exception('Full name must be at least 5 symbols');
        }elseif (strlen($fullName) > 255){
            throw new Exception('Are you serious?! Way tooooo loooog!');
        }

        $this->fullName = $fullName;

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