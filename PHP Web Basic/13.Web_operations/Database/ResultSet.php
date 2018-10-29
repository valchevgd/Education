<?php

namespace Database;


use PDOStatement;

class ResultSet implements ResultSetInterface
{
    private $PDOStatement;

    public function __construct(PDOStatement $pdoStatement)
    {
        $this->PDOStatement = $pdoStatement;
    }

    public function fetchAll(?string $className = null): \Generator
    {
       while ($row = $this->PDOStatement->fetchObject($className)){
           yield;
       }
    }
}