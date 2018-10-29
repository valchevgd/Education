<?php

class DateModifier{
    private $first_date;
    private $second_date;


    public function __construct($first_date, $second_date)
    {
        $this->first_date = $first_date;
        $this->second_date = $second_date;
    }

    public function differenceInDays(){
        $interval = date_diff($this->getFirstDate(), $this->getSecondDate());
        echo $interval->format('%a');
    }

    public function getFirstDate()
    {
        return $this->first_date;
    }

    public function setFirstDate($first_date): void
    {
        $this->first_date = $first_date;
    }

    public function getSecondDate()
    {
        return $this->second_date;
    }

    public function setSecondDate($second_date): void
    {
        $this->second_date = $second_date;
    }

}

$date_one = readline();
$date_two = readline();

$first_date = DateTime::createFromFormat('Y m d', $date_one);
$second_date = DateTime::createFromFormat('Y m d', $date_two);

$date = new DateModifier($first_date, $second_date);
$date->differenceInDays();