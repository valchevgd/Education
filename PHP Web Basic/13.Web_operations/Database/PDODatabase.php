<?php

namespace Database;

use PDO;

class PDODatabase implements DatabaseInterface
{

    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function query(string $query): PreparedStatementInterface
    {
        $stmt = $this->pdo->prepare($query);

        return new PDOPreparedStatement($stmt);
    }

    public function getLastError()
    {
        // TODO: Implement getLastError() method.
    }

    public function getLastId()
    {
        // TODO: Implement getLastId() method.
    }
}