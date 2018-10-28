<?php

$position = [];
$age = [];
$salary = [];

while (true){
    $input = readline();

    if ($input === 'filter base'){
        break;
    }

    $tokens = explode(' -> ', $input);
    $name = $tokens[0];
    $filter = $tokens[1];

    if (ctype_digit($filter)){
        $age[$name] = $filter;
        continue;
    }

    if (is_numeric($filter)){
        $salary[$name] = $filter;
        continue;
    }

    if (is_string($filter)){
        $position[$name] = $filter;
    }
}



$base_filter = readline();

if ($base_filter === 'Age'){
    foreach ($age as $name => $ages){
        echo "Name: $name".PHP_EOL;
        echo "Age: $ages".PHP_EOL;
        for ($i = 0; $i < 20; $i++){
            echo '=';
        }
        echo PHP_EOL;
    }
}

if ($base_filter === 'Salary'){
    foreach ($salary as $name => $sal){
        echo "Name: $name".PHP_EOL;
        echo sprintf("Salary: %.2f", $sal).PHP_EOL;
        for ($i = 0; $i < 20; $i++){
            echo '=';
        }
        echo PHP_EOL;
    }
}

if ($base_filter === 'Position'){
    foreach ($position as $name => $pos){
        echo "Name: $name".PHP_EOL;
        echo "Position: $pos".PHP_EOL;
        for ($i = 0; $i < 20; $i++){
            echo '=';
        }
        echo PHP_EOL;
    }
}