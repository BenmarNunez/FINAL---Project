<?php include "php/view.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Products</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="view.css">

</head>
<body>
    <div class="container">
        <div class="box">
        <h4 class="display-4 text-center">VIEW PRODUCT</h4><hr><br>
        <?php if (isset($_GET['success'])) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_GET['success']; ?>
        </div>
        <?php } ?>
        <?php if (mysqli_num_rows($result)) { ?>
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Product_Name</th>
                <th scope="col">Stock</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                while($rows = mysqli_fetch_assoc($result)){
                $i++;
                ?>
                <tr>
                <th scope="row"><?=$i?></th>
                <td><?=$rows['product_name']?></td>
                <td><?php echo $rows['stock']?></td>
                <td><a href="update.php?id=<?=$rows['id']?>" 
                        class="btn btn-success">Update</a>
                        
                    <a href="php/delete.php?id=<?=$rows['id']?>" 
			      	    class="btn btn-danger">Delete</a>
                          </td>
                    </tr>
                <?php } ?>
            </tbody>
            </table>
            <?php } ?>
            <div class="link-right">
            <a href="add_new.php" class="btn btn-success">Add Product</a>
            <a href="logout.php" class="logout">Logout</a>
            </div>
        </div>
    </div>
</body>
</html>