<?php
$input = explode(' ', readline());
$best_start = 0;
$best_length = 0;
$counter = count($input);
$start = 0;
$length = 0;

for ($i = 1; $i < $counter; $i ++){

    if ($input[$i] > $input[$i - 1]){
        if ($length === 0){
            $start = $i - 1;
        }
        $length ++;
    }else{

        $length = 0;
        $start = 0;
    }

    if ($length > $best_length){
        $best_length = $length;
        $best_start = $start;
    }
}


for ($i = $best_start; $i <= $best_start + $best_length; $i++){
    echo $input[$i].' ';
}