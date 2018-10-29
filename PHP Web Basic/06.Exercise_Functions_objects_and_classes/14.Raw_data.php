<?php

class Car{

    private $model;
    private $engine;
    private $cargo;
    private $tires;

    public function __toString()
    {
        return "$this->model";
    }

    public function __construct($model, $engine, $cargo, $tires)
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;
        $this->tires = $tires;
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

    public function getCargo()
    {
        return $this->cargo;
    }

    public function setCargo($cargo): void
    {
        $this->cargo = $cargo;
    }

    public function getTires()
    {
        return $this->tires;
    }

    public function setTires($tires): void
    {
        $this->tires = $tires;
    }


}

class Engine{

    private $speed;
    private $power;

    public function __construct($speed, $power)
    {
        $this->speed = $speed;
        $this->power = $power;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function setPower($power): void
    {
        $this->power = $power;
    }

}

class Cargo{

    private $weight;
    private $type;


    public function __construct($weight, $type)
    {
        $this->weight = $weight;
        $this->type = $type;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }

}

class Tires{

    private $pressure;
    private $age;


    public function __construct($pressure, $age)
    {
        $this->pressure = $pressure;
        $this->age = $age;
    }

    public function getPressure()
    {
        return $this->pressure;
    }

    public function setPressure($pressure): void
    {
        $this->pressure = $pressure;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

}

$n = intval(readline());

$cars = [];

while ($n-- > 0){

    $tokens = explode(' ', readline());

    $model = $tokens[0];
    $engine_speed = $tokens[1];
    $engine_power = intval($tokens[2]);
    $cargo_weight = $tokens[3];
    $cargo_type = $tokens[4];
    $t1p = floatval($tokens[5]);
    $t1a = $tokens[6];
    $t2p = floatval($tokens[7]);
    $t2a = $tokens[8];
    $t3p = floatval($tokens[9]);
    $t3a = $tokens[10];
    $t4p = floatval($tokens[11]);
    $t4a = $tokens[12];

    $engine = new Engine($engine_speed, $engine_power);
    $cargo = new Cargo($cargo_weight, $cargo_type);
    $pressure = [];
    $pressure[1] = $t1p;
    $pressure[2] = $t2p;
    $pressure[3] = $t3p;
    $pressure[4] = $t4p;
    $age = [];
    $age[1] = $t1a;
    $age[2] = $t2a;
    $age[3] = $t3a;
    $age[4] = $t4a;

    $tires = new Tires($pressure, $age);

    $car = new Car($model, $engine, $cargo, $tires);

    $cars[] = $car;
}

$key = readline();

foreach ($cars as $car){

    if ($car->getCargo()->getType() === $key){

        if ($key === 'flamable' and $car->getEngine()->getPower() > 250){
            echo $car.PHP_EOL;
        }elseif($key === 'fragile'){

            $isValid = false;

            foreach ($car->getTires()->getPressure() as $tire){
                if ($tire < 1){

                    $isValid = true;

                    break;
                }
            }

            if ($isValid){
                echo $car.PHP_EOL;
            }

        }
    }
}