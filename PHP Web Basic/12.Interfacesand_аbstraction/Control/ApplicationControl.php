<?php

class ApplicationControl
{
    public static function run()
    {
       self::readData();

    }

    private static function readData()
    {

        /**
         * @var BorderCitizen[]
         */
        $citizens = [];

        /**
         * @var BRobot[]
         */
        $robots = [];


        while (true) {
            $input = readline();
            if ($input === 'End') {
                break;
            }

            $tokens = explode(' ', $input);

            $id = end($tokens);

            if (count($tokens) == 2) {
                $robot = new BRobot($id);
                $robots[] = $robot;
            } else {
                $citizen = new BorderCitizen($id);
                $citizens[] = $citizen;
            }
        }

        $fake_id = readline();

        foreach ($citizens as $citizen){
            $citizen->checkId($fake_id);
        }

        foreach ($robots as $robot){
            $robot->checkId($fake_id);
        }
    }

}