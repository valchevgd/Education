<?php

namespace Database;


use PDOStatement;

class PDOPreparedStatement implements PreparedStatementInterface
{
    private $PDOStatement;

    public function __construct(PDOStatement $pdoStatement)
    {
        $this->PDOStatement = $pdoStatement;
    }

    public function execute(array $params = []): ResultSetInterface
    {
        $this->PDOStatement->execute($params);

        return new ResultSet($this->PDOStatement);
    }
}