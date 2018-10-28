<?php
$firstNumber = (float)readline();
$secondNumber = (float)readline();
$result = $firstNumber + $secondNumber;
$result = number_format($result, 2, '.', '');

echo '$firstNumber + $secondNumber = ' . "$firstNumber + $secondNumber = " . $result;