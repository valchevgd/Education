<?php

spl_autoload_register();


$input = explode(',', readline());

$f_factory = new FoodFactory();
$food = $f_factory->eatFood($input);

$m_factory = new MoodFactory();
$mood = $m_factory->makeMood($food->getQuantity());

echo $food->getQuantity().PHP_EOL;
echo $mood->getMood();
