<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$search = $_GET['search'] ?? '';

if ($search) {
    $statement = $pdo->prepare('SELECT * FROM products WHERE title LIKE :title  ORDER BY created_at DESC');
    $statement->bindValue(':title', "%$search%");
} else {
    $statement = $pdo->prepare('SELECT * FROM products ORDER BY created_at DESC');
}
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

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
    <div class="container mt-5">
        <h1>Products Crud</h1>
        <p><a href="create.php" class="btn btn-outline-success">Creat Product</a></p>

        <form>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search products" name="search" value="<?php echo $search; ?>">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title </th>
                    <th scope="col">Price</th>
                    <th scope="col">Created Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product) : ?>
                    <tr>
                        <th scope="row"><?php echo $product['id']; ?></th>
                        <td>
                            <img src="<?php echo $product['image']; ?>" class="img-thumbnail w-25" alt="">
                        </td>
                        <td><?php echo $product['title']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td><?php echo $product['created_at']; ?></td>
                        <td>
                            <div class="d-flex gap-2 justify-content-between"><a href="update.php?id=<?php echo $product['id']; ?>" type="button" class="btn btn-outline-primary btn-sm">Edit</a>
                                <form class="d-inline" method="post" action="delete.php">
                                    <input type="hidden" name='id' value="<?php echo $product['id']; ?>">
                                    <button type="submit" type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                                </form>
                            </div>

                        </td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>