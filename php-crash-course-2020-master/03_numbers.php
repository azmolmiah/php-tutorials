<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
// echo ($a + $b) * $c;

// Assignment with math operators
// $a += $b;
// echo $a . '<br>';

// Increment operator
// echo $a++;
// echo ++$a;

// Decrement operator

// Number checking functions
// echo is_float((1.25));

// Conversion
$str_number = '12.34';
$number = floatval($str_number);
// var_dump($number);

// Number functions
// echo "abs(-15) " . abs(-15) . '<br>';
// echo "pow(2,3) " . pow(2, 3) . '<br>';
// echo "sqrt(16) " . sqrt(16) . '<br>';
// echo "max(2,3) " . max(2, 3) . '<br>';
// echo "min(2,3) " . min(2, 3) . '<br>';
// echo "round(2.4) " . round(2.4) . '<br>';
// echo "round(2.6) " . round(2.6) . '<br>';
// echo "floor(2.6) " . floor(2.6) . '<br>';
// echo "ceil(2.4) " . ceil(2.4) . "<br>";


// Formatting numbers
$number = 123456.7890;

echo number_format($number, 2, ',', ' ');


// https://www.php.net/manual/en/ref.math.php
