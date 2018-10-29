<?php

class Human
{
    /**
     * @var string
     */
    private $first_name;

    /**
     * @var string
     */
    private $last_name;

    /**
     * Human constructor.
     * @param string $first_name
     * @param string $last_name
     * @throws Exception
     */
    public function __construct(string $first_name, string $last_name)
    {
        $this->setFirstName($first_name);
        $this->setLastName($last_name);
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     * @throws Exception
     */
    public function setFirstName(string $first_name): void
    {
        if (!preg_match("/^[A-Z]/", $first_name)){
            throw new Exception('Expected upper case letter!Argument: firstName');
        }elseif (strlen($first_name) < 4){
            throw new Exception('Expected length at least 4 symbols!Argument: firstName');
        }
        $this->first_name = $first_name;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     * @throws Exception
     */
    public function setLastName(string $last_name): void
    {
        if (!preg_match("/^[A-Z]/", $last_name)){
            throw new Exception('Expected upper case letter!Argument: lastName');
        }elseif (strlen($last_name) < 3){
            throw new Exception('Expected length at least 3 symbols!Argument: lastName');
        }
        $this->last_name = $last_name;
    }


}