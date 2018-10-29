<?php

class FeedAnimals
{
    public function feed()
    {

        /**
         * @var Animal[]
         */
        $animals = [];

        while (($input = readline()) != 'End') {
            $tokens = explode(' ', $input);

            $type = $tokens[0];
            $name = $tokens[1];
            $weight = floatval($tokens[2]);
            $region = $tokens[3];

            /**
             * @var Animal
             */
            $animal = null;

            if (count($tokens) == 4) {

                $animal = new $type($name, $type, $weight, $region);
            } elseif (count($tokens) == 5) {
                $breed = $tokens[4];
                $animal = new $type($name, $type, $weight, $region, $breed);
            }

            $animals[$type] = $animal;

            $animal->makeSound();

            $tokens = explode(' ', readline());
            $type_food = $tokens[0];
            $quantity = intval($tokens[1]);

            $food = new $type_food($quantity);

            $animal->eat($food);

        }

        foreach ($animals as $animal){
            echo $animal;
        }
    }

}