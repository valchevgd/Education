<?php
$input = readline();
$tokens = explode(" ", $input);
$tokens = array_map('intval', $tokens);
$count = count($tokens);
$is_exist = false;


for ($i = 0; $i < $count - 1; $i++){
    for ($j = min($i + 1, $count - 1); $j < $count; $j++){
        $sum = $tokens[$i] + $tokens[$j];

        for ($k = 0; $k < $count; $k++){
            if ($sum === $tokens[$k]){
                echo sprintf("%d + %d == %d", $tokens[$i], $tokens[$j], $tokens[$k]).PHP_EOL;
                $is_exist = true;
            }
        }
    }
}

if (!$is_exist){
    echo 'No';
}