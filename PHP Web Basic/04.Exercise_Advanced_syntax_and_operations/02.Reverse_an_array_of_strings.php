<?php
$input = explode(' ', readline());
$counter = count($input);


for ($i = 0; $i < $counter / 2; $i++){
    $temp = $input[$i];
    $input[$i] = $input[$counter - 1 - $i];
    $input[$counter - 1 - $i] = $temp;
}

echo implode(' ', $input);