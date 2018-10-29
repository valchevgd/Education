<?php

class Person{
    public $name;
    public $age;
    public $occupation;

    public function __construct(string $name, int $age, string $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

}

$list = [];

while (true){

    $input = readline();

    if ($input === 'END'){
        break;
    }

    $tokens = explode(' ', $input);

    $name = $tokens[0];
    $age = intval($tokens[1]);
    $occupation = $tokens[2];

    $person = new Person($name, $age, $occupation);

    $list[] = $person;
}

usort($list, function ($a, $b){
    return $a->age - $b->age;
});

foreach ($list as $person){
    echo "$person->name - age: $person->age, occupation: $person->occupation".PHP_EOL;
}