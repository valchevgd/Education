<?php

class AnimalsApp
{
    public function run(){

        while (($input = readline()) != 'Beast!'){
            $tokens = explode(' ', readline());



            try{
                if (count($tokens) < 3){
                    throw new Exception();
                }
                $name = $tokens[0];
                $age = intval($tokens[1]);
                $gender = $tokens[2];
                $animal = new $input ($name, $age, $gender);
                echo $input.' '.$animal;
                $animal->produceSound();
            }catch (Exception $e){
                echo 'Invalid input!'.PHP_EOL;
                exit();
            }

        }
    }
}