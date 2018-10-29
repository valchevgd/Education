<?php

function getLimit($zone){

    switch ($zone){
        case 'residential':
            $speed_limit = 20;
            break;
        case 'city':
            $speed_limit = 50;
            break;
        case 'interstate':
            $speed_limit = 90;
            break;
        case 'motorway':
            $speed_limit = 130;
            break;
        default:
            echo 'Not a valid input!';
            $speed_limit = 1000;
    }

    return $speed_limit;
}

function printRadar($speed, $speed_limit){

    $difference = $speed - $speed_limit;

    if ($difference < 0){
        exit;
    }

    if ($difference <= 20){
        echo 'speeding';
        exit;
    }

    if ($difference <=40){
        echo 'excessive speeding';
        exit;
    }

    if ($difference > 40){
        echo 'reckless driving';
    }
}

$input_speed = intval(readline());
$input_zone = readline();

$limit = getLimit($input_zone);
printRadar($input_speed, $limit);