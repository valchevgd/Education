<?php
$input = readline();
$tokens = explode(' ', readline());
$letter = $tokens[0];
$numOfLetter = $tokens[1];
$temp = $input;

$result = strpos($temp, $letter);
$counterOfFindingLetters = 0;
$sum = 0;

while ($result !== false) {
    $counterOfFindingLetters++;
    $sum += $result;
    $temp = substr($temp, $result +1 );
    $result = strpos($temp, $letter);
    if ($counterOfFindingLetters == $numOfLetter){
        break;
    }
}

if ($counterOfFindingLetters < $numOfLetter) {
    echo "Find the letter yourself!";
} else {
    echo $sum + ($numOfLetter - 1);
}