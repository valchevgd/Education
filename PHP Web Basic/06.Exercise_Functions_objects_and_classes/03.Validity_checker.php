<?php

function calculateDistance($x1, $y1, $x2, $y2){

    $distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

    if ((int)$distance == $distance){
        echo sprintf("{%d, %d} to {%d, %d} is valid".PHP_EOL, $x1, $y1, $x2, $y2);
    }else{
        echo sprintf("{%d, %d} to {%d, %d} is invalid".PHP_EOL, $x1, $y1, $x2, $y2);
    }
}

$input = array_map('intval', explode(', ', readline()));

$x1 = $input[0];
$y1 = $input[1];
$x2 = $input[2];
$y2 = $input[3];

calculateDistance($x1, $y1, 0, 0);

calculateDistance($x2, $y2, 0, 0);

calculateDistance($x1, $y1, $x2, $y2);