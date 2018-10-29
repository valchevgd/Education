<?php

class FoodFactory
{
    /**
     * @param array $foods
     * @return Food
     */
    public function eatFood(array $foods):Food{
        $result = 0;

        foreach ($foods as $food){
            switch (strtolower($food)){
                case 'cram':
                    $result += 2;
                    break;
                case 'lembas':
                    $result += 3;
                    break;
                case 'apple':
                    $result += 1;
                    break;
                case 'melon':
                    $result += 1;
                    break;
                case 'honeycake':
                    $result += 5;
                    break;
                case 'mushrooms':
                    $result -= 10;
                    break;
                default:
                    $result -= 1;
                    break;
            }
        }

        return new Food($result);
    }
}