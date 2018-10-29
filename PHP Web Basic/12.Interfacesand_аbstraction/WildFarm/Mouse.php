<?php

class Mouse extends Mammal
{

    public function makeSound(): void
    {
        echo 'SQUEEEAAAK!'.PHP_EOL;
    }

    /**
     * @param Food $food_in
     */
    public function eat(Food $food_in): void
    {
        $food = $food_in->getQuantity();

        if (get_class($food_in) == 'Vegetable'){
            $this->setFoodEaten($this->getFoodEaten() + $food);
        }else{
            echo $this->getType().'s are not eating that type of food!'.PHP_EOL;
        }
    }
}