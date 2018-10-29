<?php

class VTruck extends Vehicle
{

    public function __toString()
    {
        return sprintf("Truck: %.2f", $this->getFuel()) . PHP_EOL;
    }

    /**
     * @param float $distance
     */
    public function drive(float $distance): void
    {
        $max_distance = $this->getFuel() / ($this->getConsumption() + 1.6);

        if ($distance > $max_distance){
            echo 'Truck needs refueling'.PHP_EOL;
            return;
        }

        $cons = ($this->getConsumption() + 1.6) * $distance;
        $this->setFuel($this->getFuel() - $cons);

        echo "Truck travelled $distance km".PHP_EOL;

        if ($this->getFuel() <= 0){
            echo 'Fuel must be a positive number';
        }
    }

    /**
     * @param float $fuel
     */
    public function refuel(float $fuel): void
    {
        $this->setFuel($this->getFuel() + ($fuel * 0.95));
    }
}