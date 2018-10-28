<?php
$input = explode(' ', readline());
$result = [];

foreach ($input as $item){
    if (!array_key_exists($item, $result)){
        $result[$item] = 0;
    }
    $result[$item] += 1;
}

arsort($result);

foreach ($result as $key => $number){
    echo $key;
    break;
}