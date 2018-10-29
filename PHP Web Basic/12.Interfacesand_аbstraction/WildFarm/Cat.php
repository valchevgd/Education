<?php

class Cat extends Felime
{
    /**
     * @var string
     */
    private $breed;

    /**
     * Cat constructor.
     * @param string $name
     * @param string $type
     * @param float $weight
     * @param string $living_region
     * @param string $breed
     */
    public function __construct(string $name, string $type, float $weight, string $living_region, string $breed)
    {
        parent::__construct($name, $type, $weight, $living_region);
        $this->breed = $breed;
    }

    public function __toString()
    {
        return sprintf("%s[%s, %s, %s, %s, %d]", $this->getType(), $this->getName(), $this->getBreed(), $this->getWeight() ,$this->getLivingRegion(), $this->getFoodEaten()).PHP_EOL;
    }

    /**
     * @return string
     */
    public function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * @param string $breed
     */
    public function setBreed(string $breed): void
    {
        $this->breed = $breed;
    }


    public function makeSound(): void
    {
        echo 'Meowwww'.PHP_EOL;
    }

    /**
     * @param Food $food_in
     */
    public function eat(Food $food_in): void
    {
        $food = $food_in->getQuantity();

        $this->setFoodEaten($this->getFoodEaten() + $food);

    }
}