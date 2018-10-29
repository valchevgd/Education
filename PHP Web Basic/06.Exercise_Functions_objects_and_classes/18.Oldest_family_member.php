<?php

class Person{

    private $name;
    private $age;

    public function __toString()
    {
        return "$this->name $this->age";
    }

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

class Family{

    private $members;


    public function addMember(Person $member){
        $this->members[] = $member;
    }

    public function getOldestMember(){
        usort($this->members, function (Person $p1, Person $p2){
            return $p2->getAge() <=> $p1->getAge();
        });

        echo $this->members[0];
    }

    public function getMembers()
    {
        return $this->members;
    }

    public function setMembers($members): void
    {
        $this->members = $members;
    }
}

$n = intval(readline());

$family = new Family();

while ($n-- > 0){

    $input = explode(' ', readline());

    $name = $input[0];
    $age = intval($input[1]);

    $person = new Person($name, $age);

    $family->addMember($person);

}

$family->getOldestMember();