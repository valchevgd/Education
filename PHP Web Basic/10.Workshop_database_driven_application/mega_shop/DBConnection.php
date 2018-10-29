<?php

class DBConnection
{
    public static function getConnection(){

        return new PDO('mysql:host=localhost;dbname=mega_shop', 'root', '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
}