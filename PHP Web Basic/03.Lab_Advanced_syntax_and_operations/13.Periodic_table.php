<?php
$input = explode(', ', readline());
$result = [];

foreach ($input as $element){
    if (!array_key_exists($element, $result)){
        $result[$element] = 0;
    }

    $result[$element] += 1;
}

foreach ($result as $element => $count){
    if ($count === 1){
        echo $element.' ';
    }
}