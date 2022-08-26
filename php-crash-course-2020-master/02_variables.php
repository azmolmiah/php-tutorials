<?php

// What is a variable

// Variable types

// Declare variables
$name = 'Azmol Miah whats going on blud';
$age = 300912312310;
$isMale = true;
$height = 1.858999;
$salary = null;

// Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';;

// Print types of the variables
echo gettype($name) . '<br>';

// Print the whole variable
// var_dump($name, $age, $isMale, $height, $salary);
// Change the value of the variable

// Print type of the variable

// Variable checking functions
// echo is_string($name);
// echo is_int($age);
// echo is_bool($isMale);
// echo is_double($height);

// Check if variable is defined
echo isset($name);
isset($address);

// Constants
define('PI', 3.14);
echo PI;

// Using PHP built-in constants
echo SORT_ASC . '<br>';
echo PHP_INT_MAX . '<br>';
