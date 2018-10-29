<?php

class Mood
{
    /**
     * @var string
     */
    private $mood;

    /**
     * Mood constructor.
     * @param string $mood
     */
    public function __construct(string $mood)
    {
        $this->setMood($mood);
    }


    /**
     * @return string
     */
    public function getMood(): string
    {
        return $this->mood;
    }

    /**
     * @param string $mood
     */
    private function setMood(string $mood): void
    {
        $this->mood = $mood;
    }


}