<?php

class BCitizen implements CheckBirthday
{

    /**
     * @var string
     */
    private $birthday;


    /**
     * BCitizen constructor.
     * @param string $birthday
     */
    public function __construct(string $birthday)
    {
        $this->setBirthday($birthday);
    }

    /**
     * @return string
     */
    public function getBirthday(): string
    {
        return $this->birthday;
    }

    /**
     * @param string $birthday
     */
    public function setBirthday(string $birthday): void
    {
        $this->birthday = $birthday;
    }



    /**
     * @param string $date
     * @return int
     */
    public function checkBirthday(string $date):int
    {
        $count = 0;
        $offset = strlen($this->getBirthday()) - strlen($date);

        if (!substr_compare($this->getBirthday(), $date, $offset)){
            echo $this->getBirthday().PHP_EOL;
            $count++;
        }

        return $count;
    }
}