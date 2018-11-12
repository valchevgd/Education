<?php

namespace App\Repository;


use App\Data\GenreDTO;

interface GenreRepositoryInterface
{
    /**
     * @return \Generator|GenreDTO[]
     */
    public function findAll():\Generator;
}