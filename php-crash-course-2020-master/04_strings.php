<?php

// Create simple string
$string = 'Hello world';
$string2 = "Hello world";
// echo $string.'<br>';

// String concatenation

// String functions
$string = " Hello World ";

// Multiline text and line breaks
// echo "1 - " . strlen($string) . '<br>';
// echo "2 - " . trim($string) . '<br>';
// echo "3 - " . ltrim($string) . '<br>';
// echo "4 - " . rtrim($string) . '<br>';
// echo "5 - " . str_word_count($string) . '<br>';
// echo "6 - " . strrev($string) . '<br>';
// echo "7 - " . strtoupper($string) . '<br>';
// echo "8 - " . strtolower($string) . '<br>';
// echo "9 - " . ucfirst('hello') . '<br>';
// echo "10 - " . lcfirst('HELLO') . '<br>';
// echo "11 - " . ucwords('hello world and php') . '<br>';
// echo "12 - " . strpos($string, 'World') . '<br>';
// echo "13 - " . stripos($string, 'world') . '<br>';
// echo "14 - " . substr($string, 8) . '<br>';
// echo "15 - " . str_replace('World', 'PHP', $string) . '<br>';
// echo "16 - " . str_ireplace('World', 'PHP', $string) . '<br>';

// Multiline text and reserve html tags
$longtext = "
    Hello, my name is Azmol,
    I am 31,
    I love my wife
";

// echo $longtext . '<br>';
// echo nl2br($longtext) . '<br>';

$longtext = "
    Hello, my name is <strong>Azmol</strong>,
    I am <b>31</b>,
    I love my wife
";

echo $longtext . '<br>';
echo nl2br(htmlentities($longtext)) . '<br>';

echo html_entity_decode('&lt;strong&gt;Azmol&lt;/strong&gt;');
// https://www.php.net/manual/en/ref.strings.php