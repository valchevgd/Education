<?php

class Student extends Human
{
    /**
     * @var string
     */
    private $faculty_number;

    /**
     * Student constructor.
     * @param string $faculty_number
     * @throws Exception
     */
    public function __construct(string $first_name, string $last_name, string $faculty_number)
    {
        parent::__construct($first_name, $last_name);
        $this->setFacultyNumber($faculty_number);
    }

    public function __toString()
    {
        return "First Name: ".$this->getFirstName().PHP_EOL
            ."Last Name: ".$this->getLastName().PHP_EOL
            ."Faculty number: ".$this->getFacultyNumber().PHP_EOL;
    }

    /**
     * @return string
     */
    public function getFacultyNumber(): string
    {
        return $this->faculty_number;
    }

    /**
     * @param string $faculty_number
     * @throws Exception
     */
    public function setFacultyNumber(string $faculty_number): void
    {
        if (strlen($faculty_number) < 5 or strlen($faculty_number) > 10){
            throw new Exception('Invalid faculty number!');
        }
        $this->faculty_number = $faculty_number;
    }


}