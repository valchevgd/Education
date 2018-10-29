<?php

class Tiger extends Felime
{

    public function makeSound(): void
    {
        echo 'ROAAR!!!'.PHP_EOL;
    }

    /**
     * @param Food $food_in
     */
    public function eat(Food $food_in): void
    {
        $food = $food_in->getQuantity();

        if (get_class($food_in) == 'Meat'){
            $this->setFoodEaten($this->getFoodEaten() + $food);
        }else{
            echo $this->getType().'s are not eating that type of food!'.PHP_EOL;
        }
    }
}