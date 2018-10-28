<?php
$firstNum = (int)readline();
$secondNum = (int)readline();
$command = readline();

if ($command === 'sum'){
    echo $firstNum + $secondNum;
}elseif ($command === 'subtract'){
    echo $firstNum - $secondNum;
}elseif ($command === 'multiply'){
    echo $firstNum * $secondNum;
}elseif ($command === 'divide'){
    if ($secondNum === 0){
        echo 'Cannot divide by zero';
    }else{
        echo $firstNum / $secondNum;
    }
}else{
    echo 'Wrong operation supplied';
}