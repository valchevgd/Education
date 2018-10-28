<?php
$input = explode(', ', readline());
$result['rows'] = intval($input[0]);
$result['columns'] = intval($input[1]);
$matrix = [];

for ($i = 0; $i < $result['rows']; $i++){
    $matrix[$i] = array_map('intval',explode(', ', readline()));
}

foreach ($matrix as $rows){
    foreach ($rows as $num){
        $result['sum'] += $num;
    }
}
foreach ($result as $item){
    echo $item.PHP_EOL;
}