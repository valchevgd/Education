<?php

class Demon extends Character
{
    /**
     * @var float
     */
    private $special_points;

    /**
     * Demon constructor.
     * @param string $username
     * @param int $level
     * @param string $type
     * @param string $special_points
     */
    public function __construct(string $username, int $level, string $type, string $special_points)
    {
        parent::__construct($username, $level, $type);
        $this->setSpecialPoints($special_points);
    }

    public function __toString()
    {
        return "\"".$this->getUsername()."\" | \"".$this->getPassword()."\" -> ".$this->getType().PHP_EOL
            .sprintf("%.1f",$this->getLevel() * $this->getSpecialPoints());
    }

    /**
     * @return float
     */
    private function getSpecialPoints(): float
    {
        return $this->special_points;
    }

    /**
     * @param float $special_points
     */
    private function setSpecialPoints(float $special_points): void
    {
        $this->special_points = floatval($special_points);
    }


    public function passwordHash():void
    {
        $this->setPassword(strlen($this->getUsername()) * 217);
    }
}