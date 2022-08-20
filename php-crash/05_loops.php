<?php

// for ($x = 5; $x < 10; $x++) {
//     echo $x;
// }
// $x = 1;

// while ($x <= 15) {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// }

// $x = 6;

// do {
//     echo 'Number ' . $x . '<br>';
//     $x++;
// } while ($x <= 5);

$posts = ['First Post', 'Second Post', 'Third Post'];

// for ($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x];
// }

// foreach ($posts as $index => $post) {
//     echo $index . ' - ' . $post . '<br>';
// }

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'Brad@gmail'
];

foreach ($person as $key => $value) {
    echo "$key - $value<br>";
}
