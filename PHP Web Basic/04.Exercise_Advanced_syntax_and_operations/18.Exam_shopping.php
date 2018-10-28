<?php
$store = [];

while (true){
    $input = readline();

    if ($input === 'exam time'){
        break;
    }

    if ($input === 'shopping time'){
        continue;
    }

    $tokens = explode(' ', $input);
    $command = $tokens[0];
    $product = $tokens[1];
    $quantity = $tokens[2];

    if ($command === 'stock'){

        if (!array_key_exists($product, $store)){
            $store[$product] = 0;
        }

        $store[$product] += $quantity;
    }

    if ($command === 'buy'){

        if (!array_key_exists($product, $store)){
            echo "$product doesn't exist".PHP_EOL;
            continue;
        }

        if ($store[$product] === 0){
            echo "$product out of stock".PHP_EOL;
            continue;
        }

        if ($store[$product] < $quantity){
            $store[$product] = 0;
            continue;
        }

        $store[$product] -=$quantity;

    }
}

foreach ($store as $product => $quantity) {
    if ($quantity > 0){
        echo "$product -> $quantity".PHP_EOL;
    }
}