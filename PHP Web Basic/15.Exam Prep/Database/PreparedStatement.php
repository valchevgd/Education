<?php

namespace Database;


use PDOStatement;

class PreparedStatement implements PreparedStatementInterface
{
    /**
     * @var PDODatabase
     */
    private $stmt;

    public function __construct(PDOStatement $stmt)
    {
        $this->stmt = $stmt;
    }

    public function execute(array $params = []): ResultSetInterface
    {
        $this->stmt->execute($params);

        return new ResultSet($this->stmt);
    }
}