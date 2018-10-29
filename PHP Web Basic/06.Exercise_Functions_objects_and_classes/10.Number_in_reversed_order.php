<?php

class DecimalNumber{

    private $number;

    private function setNumber($num){

        $this->number = $num;
    }

    public function __construct($num)
    {
        $this->setNumber($num);
    }

    public function reverse(){
        $num = str_split($this->number);
        
        $num = array_reverse($num);

        echo implode('',$num);

    }
}

$num = readline();
$decimal_num = new DecimalNumber($num);
$decimal_num->reverse();