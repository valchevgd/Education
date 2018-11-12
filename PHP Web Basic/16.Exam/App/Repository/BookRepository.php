<?php

namespace App\Repository;


use App\Data\BookDTO;
use Database\PDODatabase;

class BookRepository implements BookRepositoryInterface
{
    /** @var PDODatabase */
    private $db;

    public function __construct(PDODatabase $pdo)
    {
        $this->db = $pdo;
    }


    public function insert(BookDTO $book): bool
    {
        $this->db->query("INSERT INTO books (title, author, description, image, GENRE_ID, USER_ID)
                                  VALUES (?, ?, ?, ?, ?, ?)
                                  ")->execute([
                                      $book->getTitle(),
            $book->getAuthor(),
            $book->getDescription(),
            $book->getImage(),
            $book->getGenreId(),
            $book->getAuthorId()
        ]);

        return true;
    }


    /**
     * @param $id
     * @return \Generator|BookDTO[]
     */
    public function findAllByUserId($id): \Generator
    {
       return $this->db->query("SELECT b. book_id as id, b.title, b.author, g.name as genreName
        FROM books as b
        INNER JOIN genres as g USING (GENRE_ID)
        WHERE b.USER_ID = ?")
            ->execute([$id])
            ->fetch(BookDTO::class);
    }

    /**
     * @return \Generator|BookDTO[]
     */
    public function getAllBooks(): \Generator
    {
        return $this->db->query("SELECT b. book_id as id, b.title, b.author, g.name as genreName, u.username as username
        FROM books as b
        INNER JOIN genres as g USING (GENRE_ID)
        INNER JOIN users as u USING (USER_ID)
        ")
            ->execute()
            ->fetch(BookDTO::class);
    }

    public function getOneById(int $id): BookDTO
    {
        return $this->db->query("SELECT b. book_id as id, b.title, b.author, g.name as genreName, b.description, b.image, b.genre_id as genreId
        FROM books as b
        INNER JOIN genres as g USING (GENRE_ID)
        WHERE b.book_id = ?
        ")
            ->execute([$id])
            ->fetch(BookDTO::class)
            ->current();
    }

    public function update(BookDTO $book, int $id): bool
    {
        $this->db->query("UPDATE books
                                SET TITLE = ?,
                                AUTHOR = ?,
                                DESCRIPTION = ?,
                                IMAGE = ?,
                                GENRE_ID = ?,
                                USER_ID = ?
                                WHERE BOOK_ID = ?")->execute([
            $book->getTitle(),
            $book->getAuthor(),
            $book->getDescription(),
            $book->getImage(),
            $book->getGenreId(),
            $book->getAuthorId(),
            $id
        ]);

        return true;
    }

    public function drop(int $id): bool
    {
        $this->db->query("DELETE FROM books
                                WHERE BOOK_ID = ?
                                ")->execute([$id]);

        return true;
    }

    public function deleteByUser(int $id): bool
    {
        $this->db->query("DELETE FROM books
                                WHERE USER_ID = ?
                                ")->execute([$id]);

        return true;
    }
}