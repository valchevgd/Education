<?php


namespace Database;


interface PDODatabaseInterface
{
    public function query(string $query):PreparedStatementInterface;
}