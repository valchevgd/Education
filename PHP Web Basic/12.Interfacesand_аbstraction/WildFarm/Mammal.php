<?php

abstract class Mammal extends Animal
{
    /**
     * @var string
     */
    private $living_region;

    /**
     * Mammal constructor.
     * @param string $name
     * @param string $type
     * @param float $weight
     * @param string $living_region
     */
    public function __construct(string $name, string $type, float $weight, string $living_region)
    {
        parent::__construct($name, $type, $weight);
        $this->setLivingRegion($living_region);
    }

    public function __toString()
    {
        return $this->getType().'['.$this->getName().', '.floatval($this->getWeight()).', '.$this->getLivingRegion().', '.$this->getFoodEaten().']'.PHP_EOL;
    }


    /**
     * @return string
     */
    public function getLivingRegion(): string
    {
        return $this->living_region;
    }

    /**
     * @param string $living_region
     */
    public function setLivingRegion(string $living_region): void
    {
        $this->living_region = $living_region;
    }


}