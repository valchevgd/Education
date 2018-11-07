<?php
/**
 * Created by PhpStorm.
 * User: valchevgd
 * Date: 11/7/2018
 * Time: 6:24 PM
 */

namespace Database;


use PDO;

class PDODatabase implements PDODatabaseInterface
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function query(string $query): PreparedStatementInterface
    {
        $stmt = $this->pdo->query($query);

        return new PreparedStatement($stmt);
    }
}