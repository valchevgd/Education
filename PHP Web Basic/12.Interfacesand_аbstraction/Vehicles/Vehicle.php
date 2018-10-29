<?php

abstract class Vehicle
{
    /**
     * @var float
     */
    private $fuel;

    /**
     * @var float
     */
    private $consumption;

    /**
     * @var float
     */
    private $tank;


    /**
     * Vehicle constructor.
     * @param float $fuel
     * @param float $consumption
     * @param float $tank
     */
    public function __construct(float $fuel, float $consumption, float $tank)
    {
        $this->setFuel($fuel);
        $this->setConsumption($consumption);
        $this->setTank($tank);
    }

    /**
     * @return float
     */
    protected function getTank(): float
    {
        return $this->tank;
    }

    /**
     * @param float $tank
     */
    protected function setTank(float $tank): void
    {
        $this->tank = $tank;
    }

    /**
     * @return float
     */
    protected function getFuel(): float
    {
        return $this->fuel;
    }

    /**
     * @param float $fuel
     */
    protected function setFuel(float $fuel): void
    {
        $this->fuel = $fuel;
    }

    /**
     * @return float
     */
    protected function getConsumption(): float
    {
        return $this->consumption;
    }

    /**
     * @param float $consumption
     */
    protected function setConsumption(float $consumption): void
    {
        $this->consumption = $consumption;
    }

    /**
     * @param float $distance
     */
    public abstract function drive(float $distance): void;

    /**
     * @param float $fuel
     */
    public abstract function refuel(float $fuel): void;

}