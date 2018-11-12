<?php

namespace App\Repository;


use App\Data\GenreDTO;
use Database\PDODatabase;

class GenreRepository implements GenreRepositoryInterface
{
    /** @var PDODatabase */
    private $db;

    public function __construct(PDODatabase $db)
    {
        $this->db = $db;
    }

    /**
     * @return \Generator|GenreDTO[]
     */
    public function findAll(): \Generator
    {
        return $this->db->query('SELECT GENRE_ID AS id, NAME AS name 
                                        FROM genres')
        ->execute()
        ->fetch(GenreDTO::class);
    }
}