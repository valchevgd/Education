<?php
$name = readline();
$age = (int)readline();
$grade = (float)readline();
$grade = number_format($grade, 2);

echo "Name: $name, Age: $age, Grade: $grade";