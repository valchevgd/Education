<?php

namespace App\Data;


use Couchbase\Exception;
use MongoDB\BSON\Timestamp;

class BookDTO
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $image;

    /**
     * @var int
     */
    private $genreId;

    /**
     * @var int
     */
    private $authorId;

    /**
     * @var Timestamp
     */
    private $addedOn;

    /**
     * @var string
     */
    private $genreName;

    /**
     * @var string
     */
    private $username;

    public static function create(string $title, string $author, string $description, string $image, int $genre_id, int $author_id): BookDTO
    {
        $book = new BookDTO();

        $book->setTitle($title)
            ->setAuthor($author)
            ->setDescription($description)
            ->setImage($image)
            ->setGenreId($genre_id)
            ->setAuthorId($author_id);

        return $book;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return BookDTO
     * @throws Exception
     */
    public function setTitle(string $title): BookDTO
    {
        if (strlen($title) < 5){
            throw new Exception('Title must be at least 4 symbols');
        }elseif (strlen($title) > 50){
            throw new Exception('Are you serious?! Way tooooo loooog!');
        }
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return BookDTO
     * @throws Exception
     */
    public function setAuthor(string $author): BookDTO
    {
        if (strlen($author) < 3){
            throw new Exception('Author name must be at least 4 symbols');
        }elseif (strlen($author) > 50){
            throw new Exception('Are you serious?! Way tooooo loooog!');
        }
        $this->author = $author;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return BookDTO
     * @throws Exception
     */
    public function setDescription(string $description): BookDTO
    {
        if (strlen($description) < 10){
            throw new Exception('Description must be at least 10 symbols');
        }elseif (strlen($description) > 10000){
            throw new Exception('Are you serious?! Way tooooo loooog!');
        }

        $this->description = $description;

        return $this;
    }

    /**
     * @return int
     */
    public function getGenreId(): int
    {
        return $this->genreId;
    }

    /**
     * @param int $genreId
     * @return BookDTO
     */
    public function setGenreId(int $genreId): BookDTO
    {
        $this->genreId = $genreId;

        return $this;
    }

    /**
     * @return int
     */
    public function getAuthorId(): int
    {
        return $this->authorId;
    }

    /**
     * @param int $authorId
     */
    public function setAuthorId(int $authorId): void
    {
        $this->authorId = $authorId;
    }

    /**
     * @return Timestamp
     */
    public function getAddedOn(): Timestamp
    {
        return $this->addedOn;
    }

    /**
     * @param Timestamp $addedOn
     *
     */
    public function setAddedOn(Timestamp $addedOn):void
    {
        $this->addedOn = $addedOn;
    }

    /**
     * @return string
     */
    public function getGenreName(): string
    {
        return $this->genreName;
    }

    /**
     * @param string $genre_name
     */
    public function setGenreName(string $genre_name): void
    {
        $this->genreName = $genre_name;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return BookDTO
     */
    public function setImage(string $image): BookDTO
    {
        $this->image = $image;
        return $this;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }


}