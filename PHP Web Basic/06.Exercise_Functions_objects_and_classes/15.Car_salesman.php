<?php

class Engine {

    private $model;
    private $power;
    private $displacement;
    private $efficienci;


    public function __construct($model, $power, $displacement = 'n/a', $efficienci = 'n/a')
    {
        $this->model = $model;
        $this->power = $power;
        $this->displacement = $displacement;
        $this->efficienci = $efficienci;
    }

    public function __toString()
    {
        return "$this->model:".PHP_EOL."Power: $this->power".PHP_EOL
            ."Displacement: $this->displacement".PHP_EOL."Efficiency: $this->efficienci";
    }


    public function getModel()
    {
        return $this->model;
    }


    public function setModel($model): void
    {
        $this->model = $model;
    }


    public function getPower()
    {
        return $this->power;
    }


    public function setPower($power): void
    {
        $this->power = $power;
    }


    public function getDisplacement()
    {
        return $this->displacement;
    }


    public function setDisplacement($displacement): void
    {
        $this->displacement = $displacement;
    }


    public function getEfficienci()
    {
        return $this->efficienci;
    }


    public function setEfficienci($efficienci): void
    {
        $this->efficienci = $efficienci;
    }



}

class Car{

    private $model;
    private $engine;
    private $wigth;
    private $color;


    public function __construct($model, $engine, $wigth = 'n/a', $color = 'n/a')
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->wigth = $wigth;
        $this->color = $color;
    }

    public function __toString()
    {
        return "$this->model:".PHP_EOL.$this->engine.PHP_EOL."Weight: $this->wigth".PHP_EOL."Color: $this->color".PHP_EOL;
    }


    public function getModel()
    {
        return $this->model;
    }


    public function setModel($model): void
    {
        $this->model = $model;
    }


    public function getEngine()
    {
        return $this->engine;
    }


    public function setEngine($engine): void
    {
        $this->engine = $engine;
    }


    public function getWigth()
    {
        return $this->wigth;
    }


    public function setWigth($wigth): void
    {
        $this->wigth = $wigth;
    }


    public function getColor()
    {
        return $this->color;
    }


    public function setColor($color): void
    {
        $this->color = $color;
    }


}

$n = intval(readline());
$engines = [];

while ($n-- > 0){

    $input = explode(' ', readline());

    $model = $input[0];
    $power = $input[1];
    $displacement = null;
    $efficiency = null;

    if (count($input) == 2){
        $engine = new Engine($model, $power);
        $engines[$model] = $engine;
        continue;
    }

    if (count($input) == 3){
        if (is_numeric($input[2])){
            $displacement = $input[2];
            $engine = new Engine($model, $power, $displacement);
            $engines[$model] = $engine;
        }else{
            $efficiency = $input[2];
            $engine = new Engine($model, $power, 'n/a', $efficiency);
            $engines[$model] = $engine;
        }

        continue;
    }

    if (count($input) == 4){
        $displacement = $input[2];
        $efficiency = $input[3];
        $engine = new Engine($model, $power, $displacement, $efficiency);
        $engines[$model] = $engine;
    }


}

$m = intval(readline());
$cars = [];

while ($m-- > 0){

    $input = explode(' ', readline());

    $model = $input[0];
    $engine = $input[1];
    $wight = null;
    $color = null;

    if (count($input) == 2){
        $car = new Car($model, $engines[$engine]);
        $cars[] = $car;
        continue;
    }

    if (count($input) == 3){
        if (is_numeric($input[2])){
            $wight = $input[2];
            $car = new Car($model, $engines[$engine], $wight);
            $cars[] = $car;
        }else{
            $color = $input[2];
            $car = new Car($model, $engines[$engine], 'n/a', $color);
            $cars[] = $car;
        }

        continue;
    }

    if (count($input) == 4){
        $wight = $input[2];
        $color = $input[3];
        $car = new Car($model, $engines[$engine], $wight, $color);
        $cars[] = $car;
    }
}

foreach ($cars as $car){
    echo $car;
}