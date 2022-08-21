<?php

// // Create array
// $fruits = ['Apples', 'Pears', 'Bananas'];

// // Print the whole array
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Get element by index
// echo $fruits[1] . '<br>';

// // Set element by index
// $fruits[0] = 'Peach';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Check if array has element at index 2
// isset($fruits[3]); //false

// // Append element
// $fruits[] = 'Banana';
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Print the length of the array
// echo count($fruits) . '<br>';

// // Add element at the end of the array
// array_push($fruits, 'foo');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// // Remove element from the end of the array
// array_pop($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';

// // Add element at the beginning of the array
// array_unshift($fruits, 'Bar');
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// // Remove element from the beginning of the array
// array_shift($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// // Split the string into an array
// $string = "Banana, Apple, Peach";
// echo '<pre>';
// var_dump(explode(",", $string));
// echo '</pre>';


// // Combine array elements into string
// echo implode("&", $fruits);


// // Check if element exist in the array
// echo '<pre>';
// var_dump(in_array('pears', $fruits));
// echo '</pre>';

// // Search element index in the array
// echo '<pre>';
// var_dump(array_search('bananas', $fruits));
// echo '</pre>';


// // Merge two arrays
// $vegetables = ["Potato", "Cucumber"];
// echo '<pre>';
// var_dump(array_merge($fruits, $vegetables));
// echo '</pre>';


// // Sorting of array (Reverse order also)
// sort($fruits);
// echo '<pre>';
// var_dump($fruits);
// echo '</pre>';


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games']
];
echo '<pre>';
var_dump($person);
echo '</pre>';

// Set element by key
echo $person['channel'] = 'Traversy Media';
echo '<pre>';
var_dump($person);
echo '</pre>';

// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])) {
    $person['address'] = 'unknown';
}

// $person['address'] = $person['address'] ?? 'Unkownd';

echo '<pre>';
var_dump($person);
echo '</pre>';


// Check if array has specific key


// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';


// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
asort($person);
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Two dimensional arrays
$todos = [
    ['title' => 'title one', 'completed' => true],
    ['title' => 'title two', 'completed' => false],
];

echo '<pre>';
var_dump($todos[0]['title']);
echo '</pre>';
