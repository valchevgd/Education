<?php
$first_array = array_map('intval',explode(" ", readline()));
$second_array = array_map('intval',explode(" ", readline()));

$first_length = count($first_array);
$second_length = count($second_array);

$sum_of_arrays = [];
$counter = max($first_length, $second_length);

for ($i = 0; $i < $counter; $i++){
    $sum_of_arrays[$i] = $first_array[$i % $first_length] + $second_array[$i % $second_length];
}

foreach ($sum_of_arrays as $number){
    echo $number. ' ';
}