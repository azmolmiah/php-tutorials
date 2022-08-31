<?php

namespace app\controllers;

use app\Router;

class ProductController
{
    public static function index(Router $router)
    {
        $search = $_GET['search'] ?? null;
        $products = $router->db->getProducts($search);

        $router->renderView('products/index', [
            'products' => $products,
            'search' => $search
        ]);
    }

    public static function create(Router $router)
    {
        $errors = [];
        $product = [
            'title' => '',
            'description' => '',
            'image' => '',
            'price' => '',
        ];
        $router->renderView('products/create', [
            'product' => $product,
            'errors' => $errors
        ]);
    }

    public static function update()
    {
        echo "Update page";
    }

    public static function delete()
    {
        echo "Delete page";
    }
}
