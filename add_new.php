<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Add Products</title>
    <link rel="stylesheet" href="" >
    <link rel="stylesheet" href="add.css">

</head>
<body>
    <div class="container">
        <form action="php/add.php"
            method="post">

        <h4 class="display-4 text-center">ADD PRODUCT</h4><hr><br>
        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?>
        </div>
        <?php } ?>
        <div class="form-group">
        <label for="product_name">Product Name</label>
        <input type="name" class="form-control" id="product_name" 
        name="product_name" 
        value="<?php if(isset($_GET['product_name']))
                        echo($_GET['product_name']); ?>"
        placeholder="Enter Product Name">
    </div>

    <div class="form-group">
        <label for="stock">Stock</label>
        <input type="text" class="form-control" id="stock" 
        name="stock" 
        value="<?php if(isset($_GET['stock']))
                        echo($_GET['stock']); ?>"
        placeholder="Enter Stock">
    </div>

  <button type="submit" class="btn btn-primary" name="add">Add Product</button>
  <a href="view_products.php" class="link_primary">View Product</a>
  
</form>
</div>
</body>
</html>