<?php include 'php/upd.php';  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="update.css">

</head>
<body>
    <div class="container">
        <form action="php/upd.php"
            method="post">

        <h4 class="display-4 text-center">UPDATE</h4><hr><br>
        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
        </div>
        <?php } ?>
        <div class="form-group">
        <label for="product_name">Product Name</label>
        <input type="name" class="form-control" id="product_name" 
        name="product_name" value="<?=$row['product_name'] ?>">
    </div>

    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="text" class="form-control" id="stock" 
        name="stock" value="<?=$row['stock'] ?>">
    </div>
    <input type="text" 
            name="id"
            value="<?=$row['id']?>"
            hidden >

  <button type="submit" class="btn btn-primary" name="update">Update</button>
  <a href="view_products.php" class="link-primary">View Product</a>
  
</form>
</div>
</body>
</html>