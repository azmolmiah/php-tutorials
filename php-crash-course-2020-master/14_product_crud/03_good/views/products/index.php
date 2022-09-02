<h1>Products Crud</h1>
<p><a href="/products/create" class="btn btn-outline-success mt-5">Creat Product</a></p>

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
                    <?php if ($product['image']) : ?>
                        <img src="/<?php echo $product['image']; ?>" class="img-thumbnail w-25" alt="">
                    <?php endif; ?>
                </td>
                <td><?php echo $product['title']; ?></td>
                <td><?php echo $product['price']; ?></td>
                <td><?php echo $product['created_at']; ?></td>
                <td>
                    <div class="d-flex gap-2 justify-content-between"><a href="/products/update?id=<?php echo $product['id']; ?>" type="button" class="btn btn-outline-primary btn-sm">Edit</a>
                        <form class="d-inline" method="post" action="/products/delete">
                            <input type="hidden" name='id' value="<?php echo $product['id']; ?>">
                            <button type="submit" type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                        </form>
                    </div>

                </td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>