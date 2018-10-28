<?php
$input = explode(', ', readline());
$rows = intval($input[0]);
$matrix = [];
$max = PHP_INT_MIN;
$min = PHP_INT_MAX;

for ($i = 0; $i < $rows; $i++){
    $matrix[$i] = array_map('intval',explode(', ', readline()));
}

foreach ($matrix as $arr){
    foreach ($arr as $number){
        if ($number > $max){
            $max = $number;
        }

        if ($number < $min){
            $min = $number;
        }
    }
}

echo "Min: ".$min.PHP_EOL;
echo "Max: ".$max;