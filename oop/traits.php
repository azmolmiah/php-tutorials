<?php

// trait FlyableTrait
// {
//     abstract public function fly();
//     public function hello()
//     {
//         echo "I can fly";
//     }
// }

// trait EngineTrait
// {
//     public function hello()
//     {
//         echo "I have an engine";
//     }
// }

// class Plain
// {
//     use FlyableTrait, EngineTrait {
//         FlyableTrait::hello insteadof EngineTrait;
//         EngineTrait::hello as engineHello;
//     }

//     public function fly()
//     {
//         echo "I am flying at 800 kmh";
//     }
// }

// $plain = new Plain();
// $plain->hello();
// $plain->engineHello();

// trait Trait1
// {
//     public function method1()
//     {
//         echo "Foo";
//     }
// }

// trait Trait2
// {
//     public function method2()
//     {
//         echo "Bar";
//     }
// }

// trait Trait3
// {
//     use Trait1, Trait2;

//     public function method3()
//     {
//         echo "3";
//     }
// }

// class MyClass {
//     use Trait3;
// }

// $a = new MyClass();
// $a->

class A
{
    public $var1 = 10;
    public function hello()
    {
        echo "Hello from class A";
    }
}

trait TraitA
{
    public function hello()
    {
        echo "Hello from trait A" . parent::hello();
    }
}

class B extends A
{
    use TraitA;
}

$a = new B();
$a->hello();
