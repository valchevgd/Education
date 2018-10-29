<?php

while (true) {
    $word = readline();

    if ($word === 'end') {
        break;
    }

    $reversedWord = strrev($word);
    echo $word . ' = ' . $reversedWord;
    echo PHP_EOL;
}