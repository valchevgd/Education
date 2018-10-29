<?php

class ApplicationSmartphone
{
    public static function run()
    {
        self::calling();
        self::browsing();
    }

    private static function calling()
    {
        $numbers = explode(' ', readline());

        foreach ($numbers as $number){
            try{
                echo Smartphone::calling($number).PHP_EOL;
            }catch (Exception $e){
                echo $e->getMessage().PHP_EOL;
            }
        }
    }

    private static function browsing()
    {
        $webs = explode(' ', readline());

        foreach ($webs as $web){
            try{
               echo Smartphone::browsing($web).PHP_EOL;
            }catch (Exception $e){
                echo $e->getMessage().PHP_EOL;
            }
        }
    }
}