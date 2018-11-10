<?php

namespace App\Repository;


use App\Data\UserDTO;
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

    public function findOneByUsername(string $username): UserDTO
    {
        return $this->db->query('SELECT user_id as id, username, password
                                        FROM users
                                        WHERE username = ?
        ')->execute([$username])
            ->fetch(UserDTO::class)
            ->current();
    }

    public function findOneById(int $user_id): UserDTO
    {
        return $this->db->query("
                                SELECT username, password, first_name AS firstName, last_name AS lastName
                                FROM users
                                WHERE user_id = ?
        ")->execute([$user_id])
            ->fetch(UserDTO::class)
            ->current();
    }

    public function delete(int $user_id): bool
    {
        $this->db->query("
        DELETE FROM users
        WHERE user_id = ?")
            ->execute([$user_id]);

        return true;
    }
}