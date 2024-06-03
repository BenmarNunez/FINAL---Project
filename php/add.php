<?php
if (isset($_POST['add'])) {
    include "../db_conn.php";
    function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data; 
    }

    $product_name = validate($_POST['product_name']);
    $stock = validate($_POST['stock']);

    $product_data = ' product_name=' .$product_name. ' stock=' .$stock;

    if (empty($product_name)) {
        header("Location: ../add_new.php?error=Product Name is required&$product_data");
    }else if (empty($stock)) {
        header("Location: ../add_new.php?error=Stock is required&$product_data");
    }else {
        $sql = "INSERT INTO products_tb(product_name, stock) 
        VALUES('$product_name', '$stock')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: ../view_products.php?success=successfully added");
        }else {
            header("Location: ../add_new.php?error=unknown error occured&$product_data");
        }
    }
}