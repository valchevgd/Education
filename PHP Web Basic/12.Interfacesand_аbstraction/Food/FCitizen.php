<?php

class FCitizen extends Human
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $birthday;

    /**
     * FCitizen constructor.
     * @param string
     * @param int
     * @param string $id
     * @param string $birthday
     */
    public function __construct(string $name, int $age, string $id, string $birthday)
    {
        parent::__construct($name, $age);
        $this->setId($id);
        $this->setBirthday($birthday);
    }

    /**
     * @return string
     */
    private function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    private function setId(string $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    private function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    private function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function buyFood():void
    {
        $this->setFood($this->getFood() + 10);
    }
}