<?php
$n = intval(readline('Please, enter the length of array: '));
$array_of_numbers = [];

for ($i = $n - 1; $i >= 0; $i--){
    $next_int = intval(readline('Please, enter next integer: '));
    $array_of_numbers[$i] = $next_int;
}

for ($i = 0; $i < $n; $i++){
    echo $array_of_numbers[$i].' ';
}