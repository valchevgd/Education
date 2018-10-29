<?php

class Smartphone implements Calling, Browsing
{

    /**
     * @param string $number
     * @return Calling|string
     * @throws Exception
     */
    public static function calling(string $number)
    {
        if (!is_numeric($number)) {
            throw new Exception('Invalid number!');
        }
        return "Calling... $number";
    }

    /**
     * @param string $web
     * @return Browsing|string
     * @throws Exception
     */
    public static function browsing(string $web)
    {
        if (preg_match('/\\d/', $web)) {
            throw new Exception('Invalid URL!');
        }
        return "Browsing: $web!";
    }
}