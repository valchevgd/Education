<?php
$input = readline();
$tokens = explode(' ', $input);
$tokens = array_map('floatval', $tokens);

foreach ($tokens as $number){
    echo $number . ' => '. round($number, 0, PHP_ROUND_HALF_UP);
    echo PHP_EOL;
}