<?php

spl_autoload_register();

$peoples = preg_split("/(;|=)/", readline());
array_pop($peoples);

try {
    $persons = Person::fillPersonsArr($peoples);


    $products_input = preg_split("/(;|=)/", readline());
    array_pop($products_input);


    $products = Product::fillProducts($products_input);


    while (true) {
        $input = readline();

        if ($input === "END") {
            break;
        }

        $tokens = explode(' ', $input);

        $name = $tokens[0];
        $product = $tokens[1];
        $persons[$name]->fillBasket($products[$product]);
    }

    foreach ($persons as $person) {
        echo $person;
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

