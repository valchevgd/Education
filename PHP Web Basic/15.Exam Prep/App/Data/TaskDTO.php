<?php

namespace App\Data;

use Exception;

class TaskDTO
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
    private $description;

    /**
     * @var string
     */
    private $location;

    /**
     * @var int
     */
    private $authorId;

    /**
     * @var int
     */
    private $catId;

    /**
     * @var string
     */
    private $startedOn;

    /**
     * @var string
     */
    private $dueDate;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $category_name;

    public static function create(string $title, string $description, string $location, int $author_id, int $cat_id, string $start_on = null, string $due_date = null):TaskDTO
    {
        $task = new TaskDTO();

        $task->setTitle($title)
            ->setDescription($description)
            ->setLocation($location)
            ->setAuthorId($author_id)
            ->setCatId($cat_id)
            ->setStartedOn($start_on)
            ->setDueDate($due_date);

        return $task;
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

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->category_name;
    }

    /**
     * @param string $category_name
     */
    public function setCategoryName(string $category_name): void
    {
        $this->category_name = $category_name;
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
     * @return TaskDTO
     * @throws Exception
     */
    public function setTitle(string $title): TaskDTO
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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return TaskDTO
     * @throws Exception
     */
    public function setDescription(string $description): TaskDTO
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
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     * @return TaskDTO
     * @throws Exception
     */
    public function setLocation(string $location): TaskDTO
    {
        if (strlen($location) < 3){
            throw new Exception('Location must be at least 4 symbols');
        }elseif (strlen($location) > 100){
            throw new Exception('Are you serious?! Way tooooo loooog!');
        }

        $this->location = $location;

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
     * @return TaskDTO
     */
    public function setAuthorId(int $authorId): TaskDTO
    {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * @return int
     */
    public function getCatId(): int
    {
        return $this->catId;
    }

    /**
     * @param int $catId
     * @return TaskDTO
     */
    public function setCatId(int $catId): TaskDTO
    {
        $this->catId = $catId;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartedOn(): string
    {
        return $this->startedOn;
    }

    /**
     * @param string $startedOn
     * @return TaskDTO
     */
    public function setStartedOn(string $startedOn): TaskDTO
    {
        $this->startedOn = $startedOn;

        return $this;
    }

    /**
     * @return string
     */
    public function getDueDate(): string
    {
        return $this->dueDate;
    }

    /**
     * @param string $dueDate
     * @return TaskDTO
     */
    public function setDueDate(string $dueDate): TaskDTO
    {
        $this->dueDate = $dueDate;
        return $this;
    }
}