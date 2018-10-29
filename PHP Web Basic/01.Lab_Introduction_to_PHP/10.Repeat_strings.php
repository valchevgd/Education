<?php
$input = readline();


$newArray = explode(" ", $input);


$counter = count($newArray);

for ($i = 0; $i < $counter; $i++){
    $word = $newArray[$i];
    $count = strlen($word);
    for ($j = 0; $j < $count; $j++){
        echo $word;
    }
}