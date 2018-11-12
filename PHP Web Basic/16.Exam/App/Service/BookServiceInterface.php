<?php

namespace App\Service;


use App\Data\BookDTO;

interface BookServiceInterface
{

    public function addBook(BookDTO $task):bool;

    /**
     * @param int $user_id
     * @return \Generator|BookDTO[]
     */
    public function findBooksByUserId(int $user_id):\Generator;

    /**
     * @return \Generator|BookDTO[]
     */
    public function findAllBooks():\Generator;

    public function findBookById(int $book_id):BookDTO;

    public function editBook(BookDTO $book, int $book_id):bool;

    public function deleteBook(int $book_id):bool;


}