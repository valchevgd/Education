<?php

$phone_book = [];

while (1){
    $input = readline();
    if ($input === "END"){
        break;
    }

    $tokens = explode(' ', $input);
    $command = $tokens[0];
    $name = $tokens[1];
    $phone = $tokens[2];

    if ($command === 'A'){

        if (!array_key_exists($name, $phone_book)){
            $phone_book[$name] = "";
        }

        $phone_book[$name] = $phone;
    }

    if ($command === 'S'){

        if (array_key_exists($name, $phone_book)){
            echo sprintf("%s -> %s".PHP_EOL, $name, $phone_book[$name]);
        }else{
            echo sprintf("Contact %s does not exist.".PHP_EOL, $name);
        }
    }
}