<?php

function getLength($x1, $y1, $x2, $y2, $x3, $y3){

    $first_distance = calculateDistance($x1, $y1, $x2, $y2);
    $second_distance = calculateDistance($x1, $y1, $x3, $y3);
    $third_distance = calculateDistance($x3, $y3, $x2, $y2);

    $distance = [];

    $distance[] = $first_distance + $third_distance;
    $distance[] = $second_distance + $third_distance;
    $distance[] = $first_distance + $third_distance;

    asort($distance);

    echo "1->2->3: $distance[0]";

}

function calculateDistance($x1, $y1, $x2, $y2){
    $distance = sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));

    return $distance;
}
$input = array_map('floatval', explode(', ', readline()));

$x1 = $input[0];
$y1 = $input[1];
$x2 = $input[2];
$y2 = $input[3];
$x3 = $input[4];
$y3 = $input[5];

getLength($x1, $y1, $x2, $y2, $x3, $y3);