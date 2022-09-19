<?php

// class Person
// {
//     public $name = "Jane";
//     private $phone = 12345;

//     public function __get($propName)
//     {
//         if ($propName === 'username') {
//             return $this->name;
//         }
//         return "Property \"$propName\" does not exist";
//     }
// }

// $p = new Person();
// echo $p->username1;

// class Person
// {
//     public $name = "Jane";
//     private $phone = 12345;

//     public function __set($propName, $value)
//     {
//         var_dump($propName, $value);
//     }
// }

// $p = new Person();
// $p->username = "Mary";

// class Person
// {
//     public $name = "Jane";
//     private $phone = 12345;

//     public function __call($name, $arguments)
//     {
//         if ('getPhone')
//             if ($name === 'getMobilePhone') {
//                 return $this->getPhone();
//             } else if ($name === 'setMobilePhone') {
//                 call_user_func_array([$this, 'setPhone'], $arguments);
//             }
//     }

//     // public function getPhone()
//     // {
//     //     return $this->phone;
//     // }

//     public function setPhone($phone)
//     {
//         $this->phone = $phone;
//     }
// }

// $p = new Person();
// echo $p->getMobilePhone();
// $p->setMobilePhone(11111);
// echo $p->getMobilePhone();

// class Person
// {
//     public $name = "Jane";
//     private $phone = 12345;

//     public static function __callStatic($name, $arguments)
//     {
//         echo "\"$name\" static method was called";
//     }
// }

// $P = new Person();
// Person::hello();

// class Person
// {
//     public $name = "Jane";
//     private $phone = 12345;

//     // public function __invoke()
//     // {
//     //     return "Object was called as a function";
//     // }
// }

// $p = new Person();
// var_dump(is_callable($p));
// echo $p();

// class Person
// {
//     public $name;
//     private $phone;

//     public function __construct($name, $phone)
//     {
//         $this->name = $name;
//         $this->phone = $phone;
//     }

//     public function __sleep()
//     {
//         unset($this->phone);
//         return ['name'];
//     }

//     public function __wakeup()
//     {
//         echo "I am waking up";
//     }
// }

// $p = new Person("Jane", 123456);
// $serialized =  serialize($p);

// $newPerson = unserialize($serialized);
// var_dump($newPerson);

class Person
{
    public $name = "Jane";
    private $phone = 12345;

    static $counter = 0;

    public function __construct($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
        self::$counter++;
    }

    public function __clone()
    {
        self::$counter++;
    }

    public function __wakeup()
    {
        self::$counter++;
    }
}

$p = new Person('Jane', 123456);
$newPerson = clone $p;
$newPerson2 = unserialize(serialize($p));
var_dump($p, $newPerson, $newPerson2);
echo Person::$counter;
