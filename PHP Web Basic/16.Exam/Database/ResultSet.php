<?php

namespace Database;


class ResultSet implements ResultSetInterface
{
    private $PDOStatement;

    public function __construct(\PDOStatement $stmt)
    {
        $this->PDOStatement = $stmt;
    }

    public function fetch(?string $className = null): \Generator
    {
        while ($row = $this->PDOStatement->fetchObject($className)){
            yield $row;
        }
    }
}