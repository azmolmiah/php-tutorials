<?php if (!empty($errors)) : ?>
    <div class="alert alert-danger">
        <?php foreach ($errors as $error) : ?>
            <div><?php echo $error; ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<form method="post" enctype="multipart/form-data">
    <?php if ($product['image']) : ?>
        <img src="/<?php echo $product['image']; ?>" alt="" class="w-25 my-4">
    <?php endif; ?>
    <div class="form-group">
        <label class="mb-1">Product Image</label>
        <br>
        <input type="file" name="image">
    </div>
    <br>
    <div class="form-group">
        <label>Product Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $product['title']; ?>">
    </div>
    <div class="form-group">
        <label>Product Description</label>
        <textarea class="form-control" name="description"><?php echo $product['description']; ?></textarea>
    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input type="number" name="price" step=".01" class="form-control mb-5" value="<?php echo $product['price']; ?>">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>