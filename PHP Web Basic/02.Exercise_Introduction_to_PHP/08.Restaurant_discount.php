<?php
$groupSize = (int)readline();
$package = readline();

$totalPrice = 0;
$hall = null;
$discount = 0;

if ($groupSize <= 50) {
    $totalPrice += 2500.0;
    $hall = "Small Hall";

    if ("Normal" == $package) {
        $totalPrice += 500.0;
        $discount = 0.05;
    } else if ("Gold" == $package) {
        $totalPrice += 750.0;
        $discount = 0.10;
    } else if ("Platinum" == $package) {
        $totalPrice += 1000.0;
        $discount = 0.15;
    }
} else if ($groupSize <= 100) {
    $totalPrice += 5000.0;
    $hall = "Terrace";

    if ("Normal" == $package) {
        $totalPrice += 500.0;
        $discount = 0.05;
    } else if ("Gold" == $package) {
        $totalPrice += 750.0;
        $discount = 0.10;
    } else if ("Platinum" == $package) {
        $totalPrice += 1000.0;
        $discount = 0.15;
    }
} else if ($groupSize <= 120) {
    $totalPrice += 7500.0;
    $hall = "Great Hall";

    if ("Normal" == $package) {
        $totalPrice += 500.0;
        $discount = 0.05;
    } else if ("Gold" == $package) {
        $totalPrice += 750.0;
        $discount = 0.10;
    } else if ("Platinum" == $package) {
        $totalPrice += 1000.0;
        $discount = 0.15;
    }
}

$priceAfterDiscount = $totalPrice - $totalPrice * $discount;
$pricePerPerson = number_format(($priceAfterDiscount / $groupSize), 2);

if ($totalPrice == 0) {
    echo "We do not have an appropriate hall.";
} else {
    echo "We can offer you the $hall";
    echo PHP_EOL;
    echo "The price per person is $pricePerPerson$";
}