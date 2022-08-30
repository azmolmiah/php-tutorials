<?php

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$image_path = '';

if (!$title) {
    $errors[] = 'Product title is required';
}
if (!$price) {
    $errors[] = 'Product price is required';
}

if (!is_dir(__DIR__ . '/public/images')) {
    mkdir(__DIR__ . '/public/images');
}

if (empty($errors)) {
    $image = $_FILES['image'] ?? null;
    $image_path = $product['image'];


    if ($image && $image['tmp_name']) {

        if ($product['image']) {
            unlink(__DIR__ . '/public/' . $product['image']);
        }

        $image_path = 'images/' . date("Y-m-d_h-i-s") . '_' . $image['name'];
        mkdir(dirname(__DIR__ . '/public/' . $image_path));
        move_uploaded_file($image['tmp_name'], __DIR__ . '/public/' . $image_path);
    }
}
