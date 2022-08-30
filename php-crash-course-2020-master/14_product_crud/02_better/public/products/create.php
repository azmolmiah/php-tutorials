<?php

require_once "../../database.php";
require_once "../../functions.php";

// echo '<pre>';
// var_dump($_FILES);
// echo '</pre>';

$errors = [];


$title = '';
$description = '';
$price = '';
$product = [
    'image' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once "../../validate_product.php";

    if (empty($errors)) {

        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, created_at) VALUES (:title, :image, :description, :price, :created_at)");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $image_path);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':created_at', date('Y-m-d H:i:s'));
        $statement->execute();
        header('Location: index.php');
    }
}

?>
<?php include_once "../../views/partials/header.php"; ?>

<p>
    <a href="index.php" class="btn btn-secondary mb-5">Go back to products</a>
</p>

<h1>Create new product</h1>

<?php include_once "../../views/products/form.php"; ?>

<?php include_once "../../views/partials/footer.php"; ?>