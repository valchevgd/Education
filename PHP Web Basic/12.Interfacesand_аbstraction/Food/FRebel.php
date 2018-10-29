<?php

class FRebel extends Human
{

    /**
     * @var string
     */
    private $group;

    /**
     * FRebel constructor.
     * @param string
     * @param int
     * @param string $group
     */
    public function __construct(string $name, int $age, string $group)
    {
        parent::__construct($name, $age);
        $this->setGroup($group);
    }

    /**
     * @return string
     */
    private function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     */
    private function setGroup(string $group): void
    {
        $this->group = $group;
    }

    public function buyFood(): void
    {
        $this->setFood($this->getFood() + 5);
    }
}