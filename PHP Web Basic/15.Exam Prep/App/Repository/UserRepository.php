<?php

namespace App\Repository;


use Database\PDODatabase;

class UserRepository implements UserRepositoryInterface
{
    /** @var PDODatabase */
    private $db;

    public function __construct(PDODatabase $db)
    {
        $this->db = $db;
    }

    public function insert(\App\Data\UserDTO $user):bool
    {
        $this->db->query("INSERT INTO users(username, password, first_name, last_name)
                                VALUES (?, ?, ?, ?)
                                ")->execute([
            $user->getUsername(),
            $user->getPassword(),
            $user->getFirstName(),
            $user->getLastName(),
        ]);

        return true;
    }
}