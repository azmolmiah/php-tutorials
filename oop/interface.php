<?php

// interface MyInterface
// {
//     public function method1();
// }

// interface MyInterface3
// {
//     public function method3();
// }

// interface MyInterface2 extends MyInterface, MyInterface3
// {
//     public function method2();
// }

// class MyClass implements MyInterface2
// {
//     public function method1()
//     {
//     }

//     public function method2()
//     {
//     }

//     public function method3()
//     {
//     }
// }

// $myClass = new MyClass();

interface DatabaseInterface
{
    public function getOrders(): array;
    public function getOrderById(int $id);
    public function createOrder(array $data);
    public function updateOrder(int $id, array $data): bool;
    public function deleteOrder(int $id): bool;
}
