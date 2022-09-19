<?php

// class Car
// {
//     private $color = 'red';
//     private $weight;
//     private $year;
//     private $availableColors = [
//         'red', 'green', 'blue', 'white'
//     ];

//     public function setYear($year)
//     {
//         $this->year = $year;
//     }

//     public function getYear()
//     {
//         return $this->year;
//     }

//     public function setColor($color)
//     {
//         if (in_array($color, $this->availableColors)) {
//             $this->color = $color;
//         }
//     }

//     public function getColor()
//     {
//         return $this->color;
//     }

//     public function setWeight($weight)
//     {
//         $this->weight = $weight;
//     }

//     public function getWeight()
//     {
//         return $this->weight;
//     }
// }

// $myCar = new Car();
// $myCar->setWeight(40);

// echo $myCar->getWeight();

// class Car
// {
//     public $color = 'red';
//     public $weight;
//     public $year;
// }

// $car = new Car();
// $car2 = clone $car;
// $car2->color = 'green';
// var_dump($car2);

// class Car
// {
//     private $color = 'red';
//     private $weight = 2000;

//     public function __construct($color, $weight)
//     {
//         $this->color = $color;
//         $this->wweight = $weight;
//     }

//     public function getColor()
//     {
//         return $this->color;
//     }

//     public function __destruct()
//     {
//         echo 'I am destroyed: ' . $this->color . PHP_EOL;
//     }
// }

// $myCar = new Car('green', 2500);
// $myCar2 = new Car('white', 1800);

// echo $myCar->getColor() . PHP_EOL;
// echo $myCar2->getColor();

// unset($myCar);
// sleep(2);

// class Car
// {
//     private $color = 'red';
//     private $weight = 2000;
//     // public static $availableColors = [
//     //     'red', 'green', 'blue', 'white'
//     // ];
//     static $counter = 0;
//     public $myCounter = 0;

//     public function __construct()
//     {
//         $this->myCounter++;
//         self::$counter++;
//     }
// }

// $myCar = new Car();
// echo Car::$counter . ' ' . $myCar->myCounter . PHP_EOL;

// $myCar2 = new Car();
// echo Car::$counter . ' ' . $myCar2->myCounter . ' ' . $myCar2->myCounter . PHP_EOL;

// class Car
// {
//     private $color = 'red';
//     private $weight = 2000;
//     static private $availableColors = [
//         'red', 'green', 'blue', 'white'
//     ];

//     public static function getAvailableColours()
//     {
//         return self::$availableColors;
//     }
// }

// $myCar = new Car();
// Car::getAvailableColours();

// class Car
// {
//     public $color;
//     public $manufacturer;

//     const COLOR_RED = 'red';
//     const COLOR_GREEN = 'green';
//     const COLOR_BLUE = 'blue';

//     const MANUFACTURER_BMW = 'BMW';
//     const MANUFACTURER_TESLA = 'Tesla';
//     const MANUFACTURER_MERCEDES = 'Mercedes';

//     public function __construct($color, $manufacturer)
//     {
//         $this->color = $color;
//         $this->manufacturer = $manufacturer;
//     }
// }

// $myCar = new Car(Car::COLOR_GREEN, Car::MANUFACTURER_MERCEDES);

// var_dump($myCar);
