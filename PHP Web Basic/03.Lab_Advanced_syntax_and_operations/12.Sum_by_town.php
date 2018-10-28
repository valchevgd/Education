<?php
$input = explode(", ", readline());
$counter = count($input);
$result = [];

for ($i = 0; $i < $counter - 1; $i += 2){
    $town = $input[$i];
    $income = $input[$i + 1];

    if (!array_key_exists($town, $result)){
        $result[$town] = 0;
    }

    $result[$town] += $income;
}

foreach ($result as $town => $income) {
    echo $town.' => '.$income.PHP_EOL;
}