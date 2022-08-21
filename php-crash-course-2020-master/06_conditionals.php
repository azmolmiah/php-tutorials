<?php

$age = 0;
$salary = 300000;

// Sample if
if ($age === 20) {
    // echo "1";
}

// Without circle braces
// if ($age === 20) echo "1";

// Sample if-else
// if ($age > 20) {
//     echo "1";
// } else {
//     echo "2";
// }

// Difference between == and ===
// if ($age == 20) {
//     echo "1" . '<br>';
// }

// if ($age == '20') {
//     echo "2" . '<br>';
// }

// if ($age === 20) {
//     echo "1" . '<br>';
// }

// if ($age === '20') {
//     echo "2" . '<br>';
// } else {
//     echo "Didnt work";
// }

// if AND
if ($age === 20 && $salary === 300000) {
    // echo "Do something";
}

// if OR

// Ternary if
// echo $age < 22 ? 'Young' : 'Old';

// Short ternary
$myAge = $age ?: 18;
echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator


// switch
$userRole = 'admin';
switch ($userRole) {
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    default:
        echo 'Invalid role';
}
