<?php

class Car{

    private $speed;
    private $fuel;
    private $economy;


    public function __construct($speed, $fuel, $economy)
    {
        $this->speed = $speed;
        $this->fuel = $fuel;
        $this->economy = $economy;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }

    public function getFuel()
    {
        return $this->fuel;
    }

    public function setFule($fuel): void
    {
        $this->fuel = $fuel;
    }

    public function getEconomy()
    {
        return $this->economy;
    }

    public function setEconomy($economy): void
    {
        $this->economy = $economy;
    }


}

$tokens = explode(' ', readline());

$speed = intval($tokens[0]);
$fuel = intval($tokens[1]);
$economy = intval($tokens[2]);

$car = new Car($speed, $fuel, $economy);

$distance = 0;
$time = 0;

while (true){

    $input = readline();

    if ($input === 'END'){
        break;
    }

    $tokens = explode(' ', $input);

    if (count($tokens) === 2){

        $command = $tokens[0];
        $option = $tokens[1];

        if ($command === 'Travel'){
            $max_distance = ($car->getFuel() / $car->getEconomy()) * 100;
            if ($option > $max_distance){
                $distance += $max_distance;
            }else{
                $distance += $option;
            }

            $expense = (min($max_distance, $option) / 100) * $car->getEconomy();
            $car->setFule($car->getFuel() - $expense);

            $time_for_distance = (min($max_distance, $option) / $car->getSpeed()) * 60;

            $time += $time_for_distance;
        }

        if ($command === 'Refuel'){

            $car->setFule($car->getFuel() + $option);
        }

        continue;
    }

    if (count($tokens) === 1){

        $command = $tokens[0];

        if ($command === 'Distance'){
            echo sprintf("Total Distance: %.1f", $distance).PHP_EOL;
            continue;
        }

        if ($command === 'Fuel'){
            echo sprintf("Fuel left: %.1f liters", $car->getFuel()).PHP_EOL;
            continue;
        }

        if ($command === 'Time'){
            $hours = intval($time / 60);
            $minutes = $time % 60;

            echo sprintf("Total Time: %d hours and %d minutes", $hours, $minutes).PHP_EOL;
        }
    }
}