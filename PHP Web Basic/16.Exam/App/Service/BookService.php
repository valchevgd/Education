<?php


namespace App\Service;


use App\Data\BookDTO;
use App\Repository\BookRepository;

class BookService implements BookServiceInterface
{
    /** @var BookRepository */
    private $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }


    public function addBook(BookDTO $book): bool
    {
        return $this->bookRepository->insert($book);
    }

    /**
     * @param int $id
     * @return \Generator|BookDTO[]
     */
    public function findBooksByUserId($id):\Generator
    {
        return $this->bookRepository->findAllByUserId($id);
    }

    /**
     * @return \Generator|BookDTO[]
     */
    public function findAllBooks(): \Generator
    {
        return $this->bookRepository->getAllBooks();
    }


    public function findBookById(int $book_id): BookDTO
    {
        return $this->bookRepository->getOneById($book_id);
    }

    public function editBook(BookDTO $book, int $book_id): bool
    {
        return $this->bookRepository->update($book, $book_id);
    }

    public function deleteBook(int $book_id): bool
    {
        return $this->bookRepository->drop($book_id);
    }

}