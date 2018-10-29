<?php

class ApplicationPerson
{
    public static function run()
    {
        $citizen = self::readData();
        self::writeData($citizen);
    }

    private static function readData()
    {
        $name = readline();
        $age = intval(readline());
        $id = readline();
        $birthday = readline();

        $citizen = new BorderCitizen($name, $age, $id, $birthday);

        return $citizen;
    }

    private static function writeData($citizen)
    {
        echo $citizen;
    }
}