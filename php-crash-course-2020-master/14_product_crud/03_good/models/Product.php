<?php

namespace app\models;

use app\Database;

class Product
{
    public ?int $id = null;
    public ?string $title = null;
    public ?string $description = null;
    public ?float $price = null;
    public ?string $image_path = null;
    public ?array $image_file = null;

    public function load($data)
    {
        $this->id = $data['id'] ?? null;
        $this->title = $data['title'];
        $this->description = $data['description'] ?? '';
        $this->price = $data['price'];
        $this->image_path = $data['image'] ?? null;
        $this->image_file = $data['image_file'] ?? null;
    }

    public function save()
    {
        $errors = [];
        if (!$this->title) {
            $errors[] = 'Product title is required';
        }
        if (!$this->price) {
            $errors[] = 'Product price is required';
        }

        if (!is_dir(__DIR__ . '/../public/images')) {
            mkdir(__DIR__ . '/../public/images');
        }

        if (empty($errors)) {

            if ($this->image_file && $this->image_file['tmp_name']) {

                if ($this->image_path) {
                    unlink(__DIR__ . '/../public/' . $this->image_path);
                }

                $this->image_path = 'images/' . date("Y-m-d_h-i-s") . '_' . $this->image_file['name'];
                mkdir(dirname(__DIR__ . '/../public/' . $this->image_path));
                move_uploaded_file($this->image_file['tmp_name'], __DIR__ . '/../public/' . $this->image_path);
            }

            $db = Database::$db;
            if ($this->id) {
                $db->updateProduct($this);
            } else {
                $db->createProduct($this);
            }
        }

        return $errors;
    }
}
