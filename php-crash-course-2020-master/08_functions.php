<?php

// Function which prints "Hello I am Zura"
function hello()
{
    echo "Hello I am Azmol";
}

// hello();

// Function with argument
function hello1($name)
{
    return "Hello I am $name" . '<br>';
}

// echo hello1('Azmol');
// echo hello1('Brad');
// echo hello1('Zura');

// Create sum of two functions
// function sum($a, $b){
//     return $a + $b;
// }

// Create function to sum all numbers using ...$nums

// function sum(...$nums)
// {
//     $sum = 0;
//     foreach ($nums as $num) {
//         $sum += $num;
//     }
//     return $sum;
// }

// echo sum(1, 2, 3, 4, 5, 6);

// Arrow functions
// function sum(...$nums)
// {
//     return array_reduce($nums, fn ($carry, $n) => $carry + $n);
// }

// echo sum(1, 2, 3, 4, 5, 6);
