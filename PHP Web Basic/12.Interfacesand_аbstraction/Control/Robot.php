<?php

class Robot implements Control
{

    /**
     * @var string
     */
    private $id;

    /**
     * BorderCitizen constructor.
     * @param string $id
     */
    public function __construct(string $id)
    {
        $this->setId($id);
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function checkId(string $fake_id)
    {
        $offset = strlen($this->getId()) - strlen($fake_id);

        if (!substr_compare($this->getId(), $fake_id, $offset)){
            echo $this->getId().PHP_EOL;
        }
    }
}