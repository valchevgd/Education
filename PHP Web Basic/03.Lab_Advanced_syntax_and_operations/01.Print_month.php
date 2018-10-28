<?php
$numberOfMonth = readline('Please, give us a number of month: ');
$months = [1 => "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

if ($numberOfMonth < 1 or $numberOfMonth > 12) {
    echo 'Invalid Month!';
}else{
    echo $months[$numberOfMonth];
}