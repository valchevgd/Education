<?php

function dayOfWeek($day)
{

    switch ($day) {
        case 'Monday':
            $number_of_day = 1;
            break;
        case 'Tuesday':
            $number_of_day = 2;
            break;
        case 'Wednesday':
            $number_of_day = 3;
            break;
        case 'Thursday':
            $number_of_day = 4;
            break;
        case 'Friday':
            $number_of_day = 5;
            break;
        case 'Saturday':
            $number_of_day = 6;
            break;
        case 'Sunday':
            $number_of_day = 7;
            break;
        default:
            return 'Invalid day!';
            break;
    }

    return $number_of_day;
}

echo dayOfWeek(readline());