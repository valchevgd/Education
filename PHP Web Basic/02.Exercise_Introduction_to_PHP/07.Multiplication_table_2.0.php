<?php
$num = (int)readline();
$startingNum = (int)readline();

if ($startingNum > 10) {
    echo "$num X $startingNum = " . ($num * $startingNum);
} else {
    for ($i = $startingNum; $i <= 10; $i++){
        echo "$num X $i = " . ($num * $i);
        echo PHP_EOL;
    }
}