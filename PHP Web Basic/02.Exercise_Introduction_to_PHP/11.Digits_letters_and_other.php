<?php
$input = readline();




preg_match_all('!\d+!', $input, $digits);
preg_match_all('![A-Z][a-z]*!', $input, $letters);
preg_match_all('![^A-Za-z\d]*!', $input, $others);



foreach ($digits as $matches){
    foreach ($matches as $match){
        echo $match;
    }
}

echo PHP_EOL;

foreach ($letters as $matches){
    foreach ($matches as $match){
        echo $match;
    }
}

echo PHP_EOL;

foreach ($others as $matches){
    foreach ($matches as $match){
        echo $match;
    }
}