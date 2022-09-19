<?php

// class ParentClass
// {
//     public $property1 = '1';
//     protected $property2 = '2';
//     private $property3 = '3';

//     public function getProperty2(): string
//     {
//         return $this->property2;
//     }

//     public function printText(string $text)
//     {
//         echo $text;
//     }
// }

// class ChildClass extends ParentClass
// {
//     public $property1 = '11';
//     protected $property2 = '22';

//     public function getProperty2(): string
//     {
//         $result = parent::getProperty2();
//         return "Something " . $result;
//     }

//     public function printText(string $text)
//     {
//         echo $text;
//     }
// }

// $obj = new ChildClass();
// echo $obj->getProperty2();

// use ChildClass as GlobalChildClass;

// class ParentClass
// {
//     public $property1 = '1';
//     protected $property2 = '2';
//     private $property3 = '3';

//     protected const PARENT_CONSTANT = "PARENT_CONSTANT";
// }

// class ChildClass extends ParentClass
// {
//     public $property1 = '11';
//     protected $property2 = '22';

//     public static function getConstant()
//     {
//         return self::PARENT_CONSTANT;
//     }
// }

// $obj = new ChildClass();
// echo GlobalChildClass::getConstant();

use Person as GlobalPerson;

class Person
{
    public $name;
    protected $age;
    private $phone;

    public function __construct($name, $age, $phone)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
    }

    public function hello()
    {
        return "Hello from person";
    }

    final public function getAge()
    {
        return $this->age;
    }
}

class Employee extends GlobalPerson
{
    private $salary;

    public function __construct($name, $age, $phone, $salary)
    {
        parent::__construct($name, $age, $phone);
        $this->salary = $salary;
    }

    public function hello()
    {
        return "I am an employee: $this->name";
    }
}

class Student extends Person
{
    public $studentNo;

    public function __construct($name, $age, $phone, $studentNo)
    {
        parent::__construct($name, $age, $phone);
        $this->studentNo = $studentNo;
    }

    public function hello()
    {
        return "Hello I am student: $this->name. with No: $this->studentNo";
    }
}

$employee = new Employee('John', 27, '123456', 2000);
$student = new Student('John', 27, '123456', 2343767);
echo $student->hello();
