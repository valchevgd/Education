<?php
$input = explode(' ', readline());
$result = [];

foreach ($input as $num){

    if (!array_key_exists($num, $result)){
        $result[$num] = 0;
    }

    $result[$num] += 1;
}

ksort($result);

foreach ($result as $k => $item){
    echo $k .' -> '. $item.PHP_EOL;
}