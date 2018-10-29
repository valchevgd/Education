<?php

class FoodApp
{

    public static function run(){

        $persons = self::readData();
        self::printData($persons);
    }

    /**
     * @return array
     */
    private static function readData():array {

        $n = intval(readline());
        $persons = [];

        while ($n-- > 0){

            $tokens = explode(' ', readline());

            $name = $tokens[0];
            $age = intval($tokens[1]);

            if (count($tokens) == 3){
                $group = $tokens[2];

                $persons[$name] = new FRebel($name, $age, $group);
            }else{
                $id = $tokens[2];
                $birthday = $tokens[3];

                $persons[$name] = new FCitizen($name, $age, $id, $birthday);
            }
        }

        while (true){

            $name = readline();
            if ($name == 'End'){
                break;
            }

            if (array_key_exists($name, $persons)){
                $persons[$name]->buyFood();
            }
        }

        return $persons;
    }

    /**
     * @param $persons
     */
    private static function printData($persons):void{

        $result = 0;

        foreach ($persons as $person){
            $result += $person->getFood();
        }

        echo "$result units food";
    }
}