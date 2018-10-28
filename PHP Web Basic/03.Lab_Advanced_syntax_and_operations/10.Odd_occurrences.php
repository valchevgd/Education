<?php
$input = strtolower(readline());
$tokens = explode(' ', $input);
$result = [];

foreach ($tokens as $word){
    if (!array_key_exists($word, $result)){
        $result[$word] = 0;
    }

    $result[$word] += 1;
}

$odd_words = [];

foreach ($result as $key => $word){
    if ($word % 2 != 0){
        $odd_words[]= $key;
    }
}

echo implode(", ", $odd_words);