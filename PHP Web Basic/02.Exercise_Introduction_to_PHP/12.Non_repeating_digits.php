<?php
$num = (int)readline();
$result = array();

if ($num < 102) {
    echo "no";
} else {
    for ($i = 102; $i <= min($num, 986); $i++) {
        $toStr = (string)$i;
        $firstDigit = $toStr[0];
        $secondDigit = $toStr[1];
        $thirdDigit = $toStr[2];
        if ($firstDigit == $secondDigit || $firstDigit == $thirdDigit || $secondDigit == $thirdDigit) {
            continue;
        }

        array_push($result, $toStr);
    }

    $tosString = join(', ', $result);
    echo $tosString;
}