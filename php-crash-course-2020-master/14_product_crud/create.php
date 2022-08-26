<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$date = date('Y-m-d H:i:s');

$statement = $pdo->prepare("INSERT INTO products (title, image, description, price, created_at) VALUES (:title, :image, :description, :price, :created_at)");
$statement->bindValue(':title', $title);
$statement->bindValue(':image', '');
$statement->bindValue(':description', $description);
$statement->bindValue(':price', $price);
$statement->bindValue(':created_at', $date);
$statement->execute();





// echo '<pre>';
// var_dump($_POST['title']);
// echo '</pre>';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products Crud</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Create new product</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="form-group">
                <label>Product Image</label>
                <input type="file" name="image">
            </div>
            <br>
            <div class="form-group">
                <label>Product Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Product Description</label>
                <textarea class="form-control" name="description"></textarea>
            </div>
            <div class="form-group">
                <label>Product Price</label>
                <input type="number" name="price" step=".01" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>