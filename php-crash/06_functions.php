<?php

function registerUser($email)
{
    echo $email . ' registered';
}

// registerUser('Brad');

function sum($n1 = 4, $n2 = 5)
{
    return $n1 + $n2;
}

$number = sum();
// echo $number;

$subtract = function ($n1, $n2) {
    return $n1 - $n2;
};

// echo $subtract(10, 5);

$eq = fn ($x, $y) => $x == $y;

echo $eq(100, '100'); // 1 (or true)
