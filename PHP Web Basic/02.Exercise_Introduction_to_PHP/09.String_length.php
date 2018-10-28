<?php
$input = readline();
$length = strlen($input);

if ($length > 20){
    $subdtr = substr($input, 0, 20);
    echo $subdtr;
}elseif ($length === 20){
    echo $input;
}else{
    $starsCounter = 20 - $length;
    echo $input;
    for ($i = 0; $i < $starsCounter; $i++){
        echo '*';
    }
}