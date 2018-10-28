<?php
$num = (int)readline();

for ($i = 1; $i <= 10; $i++){
    echo "$num X $i = " . ($num * $i);
    echo PHP_EOL;
}