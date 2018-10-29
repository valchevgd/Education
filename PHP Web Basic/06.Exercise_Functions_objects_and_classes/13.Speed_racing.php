<?php

class Car
{

    private $model;
    private $fuel;
    private $cost_for_km;
    private $distance;


    public function __construct($model, $fuel, $cost_for_km, $distance = 0)
    {
        $this->model = $model;
        $this->fuel = $fuel;
        $this->cost_for_km = $cost_for_km;
        $this->distance = $distance;
    }

    public function __toString()
    {
        return sprintf("%s %.2f %.0f", $this->model, $this->fuel, $this->distance);
    }

    public function carMovement($distance_to_travel)
    {
        $max_distance = number_format($this->getFuel() / $this->getCostForKm(), 2);

        if ($distance_to_travel > $max_distance) {

            echo "Insufficient fuel for the drive".PHP_EOL;
            return;
        }

        $fuel_cost = number_format($distance_to_travel * $this->getCostForKm(), 2);
        $this->setFuel(number_format($this->getFuel() - $fuel_cost, 2));

        $this->setDistance($this->getDistance() + $distance_to_travel);
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model): void
    {
        $this->model = $model;
    }

    public function getFuel()
    {
        return $this->fuel;
    }

    public function setFuel($fuel): void
    {
        $this->fuel = $fuel;
    }

    public function getCostForKm()
    {
        return $this->cost_for_km;
    }

    public function setCostForKm($cost_for_km): void
    {
        $this->cost_for_km = $cost_for_km;
    }

    public function getDistance()
    {
        return $this->distance;
    }

    public function setDistance($distance): void
    {
        $this->distance = $distance;
    }
}

$n = intval(readline());

$cars = [];

while ($n-- > 0) {

    $tokens = explode(' ', readline());

    $model = $tokens[0];
    $fuel = floatval($tokens[1]);
    $cost = floatval($tokens[2]);

    $car = new Car($model, $fuel, $cost);

    $cars[$model] = $car;
}

while (true) {

    $input = readline();

    if ($input === 'End') {
        break;
    }

    $tokens = explode(' ', $input);

    $car_to_move = $tokens[1];
    $distance_to_travel = floatval($tokens[2]);

    $cars[$car_to_move]->carMovement($distance_to_travel);

}

foreach ($cars as $car){

    echo $car.PHP_EOL;
}