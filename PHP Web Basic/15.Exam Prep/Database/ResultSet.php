<?php

namespace Database;


use PDOStatement;

class ResultSet implements ResultSetInterface
{
    /**
     * @var PDOStatement
     */
    private $stmt;

    public function __construct(PDOStatement $stmt)
    {
        $this->stmt = $stmt;
    }

    public function fetch(?string $class_name = null): \Generator
    {
        while ($row = $this->stmt->fetchObject($class_name)){
            yield $row;
        }
    }
}