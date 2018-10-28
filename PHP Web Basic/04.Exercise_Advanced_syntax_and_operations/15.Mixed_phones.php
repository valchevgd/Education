<?php
$input = readline();
$phone_book = [];

while ($input !== 'Over'){

    $tokens = explode(' : ', $input);
    $first_element = $tokens[0];
    $second_element = $tokens[1];

    if (ctype_digit($first_element)){
        $phone_book[$second_element] = $first_element;
    }else{
        $phone_book[$first_element] = $second_element;
    }

    $input = readline();

    if ($input === 'Over'){
        ksort($phone_book);
        
        foreach ($phone_book as $name => $phone) {
            echo sprintf("%s -> %s",$name, $phone).PHP_EOL;
        }
    }
}