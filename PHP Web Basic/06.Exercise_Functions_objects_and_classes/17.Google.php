<?php

class Person
{

    private $name;
    private $company;
    private $pokemons;
    private $parents;
    private $children;
    private $car;

    /**public function __toString()
     * {
     * return "$this->name".PHP_EOL."Company: $this->company".PHP_EOL."Car: $this->car".PHP_EOL
     * ."Pokemon: $this->pokemons".PHP_EOL."Parents: $this->parents".PHP_EOL."Children: $this->children";
     * }**/

    public function addPokemon(Pokemon $pokemon)
    {
        $this->pokemons[] = $pokemon;
    }

    public function addParent(Parents $parent)
    {
        $this->parents[] = $parent;
    }

    public function addChild(Children $child)
    {
        $this->children[] = $child;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getCompany()
    {
        return $this->company;
    }


    public function setCompany($company): void
    {
        $this->company = $company;
    }


    public function getPokemons()
    {
        return $this->pokemons;
    }


    public function setPokemons($pokemons): void
    {
        $this->pokemons = $pokemons;
    }


    public function getParents()
    {
        return $this->parents;
    }


    public function setParents($parents): void
    {
        $this->parents = $parents;
    }


    public function getChildren()
    {
        return $this->children;
    }


    public function setChildren($children): void
    {
        $this->children = $children;
    }


    public function getCar()
    {
        return $this->car;
    }


    public function setCar($car): void
    {
        $this->car = $car;
    }


}

class Company
{

    private $name;
    private $department;
    private $salary;

    public function __toString()
    {
        return sprintf("$this->name $this->department %.2f", $this->salary) . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getDepartment()
    {
        return $this->department;
    }


    public function setDepartment($department): void
    {
        $this->department = $department;
    }


    public function getSalary()
    {
        return $this->salary;
    }


    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }


}

class Pokemon
{

    private $name;
    private $type;

    public function __toString()
    {
        return "$this->name $this->type" . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
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

class Parents
{

    private $name;
    private $birthday;

    public function __toString()
    {
        return "$this->name $this->birthday" . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getBirthday()
    {
        return $this->birthday;
    }


    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
    }


}

class Children
{

    private $name;
    private $birthday;

    public function __toString()
    {
        return "$this->name $this->birthday" . PHP_EOL;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }


    public function getBirthday()
    {
        return $this->birthday;
    }


    public function setBirthday($birthday): void
    {
        $this->birthday = $birthday;
    }


}

class Car
{

    private $model;
    private $speed;

    public function __toString()
    {
        return "$this->model $this->speed" . PHP_EOL;
    }

    public function getModel()
    {
        return $this->model;
    }


    public function setModel($model): void
    {
        $this->model = $model;
    }


    public function getSpeed()
    {
        return $this->speed;
    }


    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }


}

$persons = [];

while (true) {

    $input = readline();

    if ($input === 'End') {
        break;
    }

    $tokens = explode(' ', $input);

    $name = $tokens[0];
    $command = $tokens[1];

    if (!array_key_exists($name, $persons)) {
        $person = new Person();
        $person->setName($name);
        $persons[$name] = $person;
    }

    if (count($tokens) === 5) {

        $company_name = $tokens[2];
        $department = $tokens[3];
        $salary = floatval($tokens[4]);

        $company = new Company();
        $company->setName($company_name);
        $company->setDepartment($department);
        $company->setSalary($salary);

        $persons[$name]->setCompany($company);


        continue;
    }

    if ($command === 'pokemon') {

        $pokemon = new Pokemon();
        $pokemon->setName($tokens[2]);
        $pokemon->setType($tokens[3]);

        $persons[$name]->addPokemon($pokemon);

        continue;
    }

    if ($command === 'parents') {

        $parent = new Parents();
        $parent->setName($tokens[2]);
        $parent->setBirthday($tokens[3]);

        $persons[$name]->addParent($parent);

        continue;
    }

    if ($command === 'children') {

        $children = new Children();
        $children->setName($tokens[2]);
        $children->setBirthday($tokens[3]);

        $persons[$name]->addChild($children);

        continue;
    }

    if ($command === 'car') {

        $car = new Car();
        $car->setModel($tokens[2]);
        $car->setSpeed($tokens[3]);

        $persons[$name]->setCar($car);
    }


}

$name_to_print = readline();


foreach ($persons as $person) {

    if ($person->getName() == $name_to_print) {

        echo $person->getName() . PHP_EOL;
        echo 'Company:' . PHP_EOL;
        if ($person->getCompany() != null){
            echo $person->getCompany();
        }
        echo "Car:".PHP_EOL;
        if ($person->getCar() != null){
            echo $person->getCar();
        }
        echo "Pokemon:".PHP_EOL;
        if ($person->getPokemons() != null) {
            foreach ($person->getPokemons() as $pokemon) {
                echo $pokemon;
            }
        }
        echo "Parents:".PHP_EOL;
        if ($person->getParents() != null) {
            foreach ($person->getParents() as $parent) {
                echo $parent;
            }
        }
        echo "Children:".PHP_EOL;
        if ($person->getChildren() != null) {
            foreach ($person->getChildren() as $child) {
                echo $child;
            }
        }

    }
}