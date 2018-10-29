<?php

class VBus extends Vehicle
{
    public function __toString()
    {
        return sprintf("Bus: %.2f", $this->getFuel()) . PHP_EOL;
    }

    /**
     * @param float $distance
     */
    public function drive(float $distance): void
    {
        $max_distance = $this->getFuel() / ($this->getConsumption() + 1.4);

        if ($distance > $max_distance) {
            echo 'Bus needs refueling'.PHP_EOL;
            return;
        }

        $cons = ($this->getConsumption() + 1.4) * $distance;
        $this->setFuel($this->getFuel() - $cons);

        echo "Bus travelled $distance km".PHP_EOL;

        if ($this->getFuel() <= 0){
            echo 'Fuel must be a positive number';
        }
    }

    /**
     * @param float $distance
     */
    public function driveEmpty(float $distance){

        $max_distance = $this->getFuel() / $this->getConsumption();

        if ($distance > $max_distance) {
            echo 'Bus needs refueling'.PHP_EOL;
            return;
        }

        $cons = $this->getConsumption()  * $distance;
        $this->setFuel($this->getFuel() - $cons);

        echo "Bus travelled $distance km".PHP_EOL;

        if ($this->getFuel() <= 0){
            echo 'Fuel must be a positive number';
        }
    }

    /**
     * @param float $fuel
     */
    public function refuel(float $fuel): void
    {
        if ($this->getFuel() + $fuel > $this->getTank()){
            echo 'Cannot fit fuel in tank'.PHP_EOL;
            return;
        }
        $this->setFuel($this->getFuel() + $fuel);
    }
}