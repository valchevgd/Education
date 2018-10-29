<?php

class Citizen implements Person, Identifiable, Birthable
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $age;

    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $birthday;

    /**
     * Citizen constructor.
     * @param string $name
     * @param int $age
     * @param string $id
     * @param string $birthday
     */
    public function __construct(string $name, int $age, string $id, string $birthday)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setId($id);
        $this->setBirthday($birthday);
    }


    public function __toString()
    {
        return $this->getName().PHP_EOL.$this->getAge().PHP_EOL.$this->getId().PHP_EOL.$this->getBirthday();
    }

    /**
     * @param string $name
     */
    public function setName(string $name):void
    {
        $this->name = $name;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age):void
    {
        $this->age = $age;
    }

    /**
     * @param string $id
     */
    public function setId(string $id):void
    {
       $this->id = $id;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday(string $birthday):void
    {
        $this->birthday = $birthday;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }


}