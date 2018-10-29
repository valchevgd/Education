<?php

class MoodApp
{
    public static function run(){
        self::createCharacter();
    }

    private static function createCharacter(){

        $tokens = explode(' | ', readline());

        $username = $tokens[0];
        $type = $tokens[1];
        $special_points = $tokens[2];
        $level = intval($tokens[3]);

        $character = new $type($username, $level, $type, $special_points);

        $character->passwordHash();

        echo $character;
    }
}