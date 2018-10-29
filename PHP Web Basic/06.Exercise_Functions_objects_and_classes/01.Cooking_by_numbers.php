<?php

function calculateNum($number, $op){

    switch ($op){
        case 'chop':
            $number /=2;
            break;
        case 'dice':
            $number = sqrt($number);
            break;
        case 'spice':
            $number++;
            break;
        case 'bake':
            $number *=3;
            break;
        case 'fillet':
            $number -= $number * 0.2;
            break;

    }

    return $number;
}


$number = intval(readline());
$operations = explode(", ", readline());

foreach ($operations as $operation) {

    $number = calculateNum($number, $operation);

    echo $number.PHP_EOL;
}