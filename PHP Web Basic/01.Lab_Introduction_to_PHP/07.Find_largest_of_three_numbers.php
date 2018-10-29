<?php
$firstNum = (int)readline();
$secondNum = (int)readline();
$thirdNum = (int)readline();

$firstMax = max($firstNum, $secondNum);
$finaleMax = max($firstMax, $thirdNum);

echo $finaleMax;