<?php
$num = (int)readline();

for ($i = 1; $i <= $num; $i++){
    $newNum = $i;
    $sum = 0;
    while ($newNum > 0){
        $numToSum = $newNum % 10;
        $sum += $numToSum;
        $newNum /= 10;
    }

    if ($sum == 5 || $sum == 7 || $sum == 11){
        echo "$i -> True";
        echo PHP_EOL;
    }else{
        echo "$i -> False";
        echo PHP_EOL;
    }
}