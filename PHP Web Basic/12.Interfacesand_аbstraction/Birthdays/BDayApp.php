<?php

class BDayApp
{
    public static function run()
    {
        $birthdays = self::readData();
        self::printData($birthdays);
    }

    private static function readData():array
    {

        $birthdays = [];

        while (true) {

            $input = readline();
            if ($input == 'End') {
                break;
            }

            $tokens = explode(' ', $input);

            $type = $tokens[0];
            $birthday = end($tokens);

            if ($type != 'Robot'){
                $type = 'B'.$type;
                $birthdays[] = new $type($birthday);
            }
        }

        return $birthdays;
    }

    private static function printData($birthdays){

        $special_year = readline();
        $result = 0;

        foreach ($birthdays as $birthday){

            $result += $birthday->checkBirthday($special_year);
        }

        if ($result === 0){
            echo '<no output>';
        }
    }
}