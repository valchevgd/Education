<?php

class MoodFactory
{
    /**
     * @param int $food
     * @return Mood
     */
    public function makeMood(int $food):Mood{
        $mood = null;

        if ($food < -5){
            $mood = 'Angry';
        }elseif ($food < 0){
            $mood = 'Sad';
        }elseif ($food <= 15){
            $mood = 'Happy';
        }elseif ($food > 15){
            $mood = 'PHP';
        }

        return new Mood($mood);
    }
}