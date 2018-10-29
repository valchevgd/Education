<?php

class GoldenEditionBook extends Book
{
    public function __construct(string $title, string $author, float $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price + ($price * 0.3));
    }

    public function __toString()
    {
        return parent::__toString();
    }
}