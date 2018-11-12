<?php

namespace App\Service;


use App\Data\GenreDTO;
use App\Repository\GenreRepository;

class GenreService implements GenreServiceInterface
{

    private $genreRepository;

    public function __construct(GenreRepository $genreRepository)
    {
        $this->genreRepository = $genreRepository;
    }

    /**
     * @return \Generator|GenreDTO[]
     */
    public function getAll(): \Generator
    {
        return $this->genreRepository->findAll();
    }
}