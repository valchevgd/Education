<?php

spl_autoload_register();

$input = explode(' ', readline());

$student_first_name = $input[0];
$student_last_name = $input[1];
$number = $input[2];

$tokens = explode(' ', readline());

$worker_first_name = $tokens[0];
$worker_last_name = $tokens[1];
$weekly_salary = floatval($tokens[2]);
$working_hours = intval($tokens[3]);

try{
    $student = new Student($student_first_name, $student_last_name, $number);
    $worker = new Worker($worker_first_name, $worker_last_name, $weekly_salary, $working_hours);
    echo $student.PHP_EOL;
    echo $worker;

}catch (Exception $e){
    echo $e->getMessage();
}
