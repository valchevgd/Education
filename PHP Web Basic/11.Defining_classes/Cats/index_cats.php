<?php

spl_autoload_register();

/**
 * @var Cats[]
 */
$cats = [];

while (true){

    $input = readline();
    if ($input == 'End'){
        break;
    }

    $tokens = explode(' ', $input);

    $breed = $tokens[0];
    $name = $tokens[1];
    $option = $tokens[2];

    $cats[] = new Cats($breed, $name, $option);
}

$to_print = readline();

foreach ($cats as $cat){
    if ($cat->getName() == $to_print){
        echo $cat;
    }
}