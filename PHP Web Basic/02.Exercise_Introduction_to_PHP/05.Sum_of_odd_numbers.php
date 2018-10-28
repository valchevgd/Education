<?php
$oddNumbers = (int)readline();
$totalOdd = 0;
$oddSum = 0;
$counter = 1;

while ($totalOdd < $oddNumbers) {
    if ($counter % 2 != 0) {
        echo $counter;
        echo PHP_EOL;
        $oddSum += $counter;
        $totalOdd++;
    }

    $counter++;
}

echo "Sum: $oddSum";