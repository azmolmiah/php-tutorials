<?php

require_once "Person.php";
// What is class and instance

$p = new Person('Brad', 'Traversy');
$p->setAge(30);
echo '<pre>';
var_dump($p);
echo '</pre>';
echo $p->getAge();

$p2 = new Person('John', 'Doe');
echo '<pre>';
var_dump($p2);
echo '</pre>';
echo Person::getCounter();


// Create Person class in Person.php

// Create instance of Person

// Using setter and getter