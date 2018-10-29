<?php

interface CheckBirthday
{
    /**
     * @param string $date
     */
    public function checkBirthday(string $date):int;
}