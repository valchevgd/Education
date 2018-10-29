<?php

class Book
{
    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $author;

    /**
     * @var float
     */
    private $price;

    /**
     * Book constructor.
     * @param string $title
     * @param string $author
     * @param float $price
     * @throws Exception
     */
    public function __construct(string $title, string $author, float $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }

    /**
     * @return string
     */
    protected function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @throws Exception
     */
    protected function setTitle(string $title): void
    {
        if (strlen($title) < 3){
            throw new Exception("Title not valid!");
        }
        $this->title = $title;
    }

    /**
     * @return string
     */
    protected function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @throws Exception
     */
    protected function setAuthor(string $author): void
    {
        if (strpbrk($author, '1234567890') !== false){
            throw new Exception('Author not valid!');
        }
        $this->author = $author;
    }

    /**
     * @return float
     */
    protected function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @throws Exception
     */
    protected function setPrice(float $price): void
    {
        if ($price <= 0){
            throw new Exception('Price not valid!');
        }
        $this->price = $price;
    }


    public function __toString()
    {
        return 'OK'.PHP_EOL.$this->getPrice();
    }
}
