<?php

class Person{

    private $name;
    private $age;


    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    public function getName()
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
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
$persons = [];

while ($n-- > 0){

    $input = explode(' ', readline());

    $name = $input[0];
    $age = intval($input[1]);

    $persons[] = new Person($name, $age);
}

 $filter = array_filter($persons, function (Person $person){
     return $person->getAge() > 30;
 });

usort($filter, function (Person $p1, Person $p2){
   return $p1->getName() <=> $p2->getName();
});

foreach ($filter as $person){
    echo $person->getName().' - '.$person->getAge().PHP_EOL;
}