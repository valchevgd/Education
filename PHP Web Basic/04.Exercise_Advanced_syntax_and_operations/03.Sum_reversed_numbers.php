<?php
$input = array_map('intval', explode(' ', readline()));
$counter = count($input);

for ($i = 0; $i < $counter; $i++){
    $temp = array_map('intval',str_split($input[$i]));
    $in_counter = count($temp);
    for ($k = 0; $k < $in_counter / 2; $k++){
        $in_temp = $temp[$k];
        $temp[$k] = $temp[$in_counter - 1 - $k];
        $temp[$in_counter - 1 - $k] = $in_temp;
    }
    $input[$i] = implode($temp);
}

$input = array_map('intval', $input);

$sum = array_sum($input);

echo $sum;