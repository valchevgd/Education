<?php
$input = str_split(readline());
$result = [];

foreach ($input as $letter){

    if (array_key_exists($letter, $input)){
        $result[$letter] = 0;
    }

    $result[$letter] += 1;
}

foreach ($result as $key => $value){
    echo $key.' -> '.$value.PHP_EOL;
}