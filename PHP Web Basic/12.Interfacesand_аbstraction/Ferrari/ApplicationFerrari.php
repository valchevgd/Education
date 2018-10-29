<?php

class ApplicationFerrari
{
    public static function run(){
        $ferrari = self::createDate();
        self::printData($ferrari);
    }

    /**
     * @return string
     */
    private static function createDate():string {
        $driver = readline();

        return $ferrari = new Ferrari($driver);
    }

    /**
     * @param $ferrari
     */
    private static function printData($ferrari):void {
        echo $ferrari;
    }
}