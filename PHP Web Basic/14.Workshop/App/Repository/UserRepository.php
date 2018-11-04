<?php

namespace App\Repository;


use App\Data\UserDTO;
use Database\PDODatabase;

class UserRepository implements UserRepositoryInterface
{
    private $db;

    public function __construct(PDODatabase $db)
    {
        $this->db = $db;
    }

    public function findOne(int $id): UserDTO
    {
        return $this->db->query("
                                SELECT username, password, first_name AS firstName, last_name AS lastName, born_on AS bornOn
                                FROM users
                                WHERE id = ?
        ")->execute([$id])
            ->fetch(UserDTO::class)
            ->current();
    }

    public function findOneByUsername(string $username): ?UserDTO
    {
       return $this->db->query("SELECT * 
                              FROM users 
                              WHERE username = ?
                              ")->execute([$username])
            ->fetch(UserDTO::class)
            ->current();
    }

    /** @return \Generator|UserDTO[] */
    public function findAll(): \Generator
    {
       return $this->db->query("
        SELECT username, password, first_name AS firstName, last_name AS lastName, born_on AS bornOn
         FROM users
        ")->execute()
            ->fetch(UserDTO::class);
    }

    public function update(UserDTO $user): bool
    {
        $this->db->query("
                                UPDATE users
                                SET username = ?,
                                password = ?,
                                first_name = ?,
                                last_name = ?,
                                born_on = ?
                                WHERE id = ?
        ")->execute([
            $user->getUsername(),
            $user->getPassword(),
            $user->getFirstName(),
            $user->getLastName(),
            $user->getBornOn(),
            $_SESSION['id']
        ]);

        return true;
    }

    public function insert(UserDTO $user): bool
    {
        $this->db->query("INSERT INTO users(username, password, first_name, last_name, born_on)
                                VALUES (?, ?, ?, ?, ?)
                                ")->execute([
                                    $user->getUsername(),
                                    $user->getPassword(),
                                    $user->getFirstName(),
                                    $user->getLastName(),
                                    $user->getBornOn()
        ]);

        return true;
    }

    public function delete(int $id): bool
    {
        $this->db->query("
        DELETE FROM users
        WHERE id = ?")
            ->execute([$id]);

        return true;
    }
}