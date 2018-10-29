<?php

abstract class Animal
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $weight;

    /**
     * @var int
     */
    private $food_eaten = 0;

    /**
     * Animal constructor.
     * @param string $name
     * @param string $type
     * @param float $weight
     */
    public function __construct(string $name, string $type, float $weight)
    {
        $this->setName($name);
        $this->setType($type);
        $this->setWeight($weight);
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getFoodEaten(): int
    {
        return $this->food_eaten;
    }

    /**
     * @param int $food_eaten
     */
    public function setFoodEaten(int $food_eaten): void
    {
        $this->food_eaten = $food_eaten;
    }

    public abstract function makeSound():void;

    /**
     * @param Food $food
     */
    public abstract function eat(Food $food):void;

}