<?php

class Cats
{

    /**
     * @var string
     */
    private $breed;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $option;

    /**
     * Cats constructor.
     * @param string $breed
     * @param string $name
     * @param string $option
     */
    public function __construct(string $breed, string $name, string $option)
    {
        $this->setBreed($breed);
        $this->setName($name);
        $this->setOption($option);
    }

    public function __toString()
    {
        return $this->getBreed().' '.$this->getName().' '.$this->getOption();
    }

    /**
     * @return string
     */
    private function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * @param string $breed
     */
    private function setBreed(string $breed): void
    {
        $this->breed = $breed;
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
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    private function getOption(): string
    {
        return $this->option;
    }

    /**
     * @param string $option
     */
    private function setOption(string $option): void
    {
        $this->option = $option;
    }


}