<?php

abstract class Animal
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
    private $gender;

    /**
     * Animal constructor.
     * @param string $name
     * @param int $age
     * @param string $gender
     * @throws Exception
     */


    public function __construct(string $name, int $age, string $gender)
    {

        $this->setName($name);
        $this->setAge($age);
        $this->setGender($gender);


    }

    public function __toString()
    {
        return $this->getName() . ' ' . $this->getAge() . ' ' . $this->getGender() . PHP_EOL;
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     * @throws Exception
     */
    public function setAge(int $age): void
    {
        if ($age < 0) {
            throw new Exception();
        }
        $this->age = $age;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender): void
    {
        $this->gender = $gender;
    }


    public abstract function produceSound();
}