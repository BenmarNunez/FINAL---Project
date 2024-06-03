<?php 

if (isset($_GET['id'])) {
	include "db_conn.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM products_tb WHERE id=$id";
        $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);
    }else {
    	header("Location: view_products.php");
    }


}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$product_name = validate($_POST['product_name']);
	$stock = validate($_POST['stock']);
	$id = validate($_POST['id']);

	if (empty($product_name)) {
		header("Location: ../update.php?id=$id&error=Product Name is required");
	}else if (empty($stock)) {
		header("Location: ../update.php?id=$id&error=Stock is required");
	}else {

       $sql = "UPDATE products_tb
               SET product_name='$product_name', stock='$stock'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../view_products.php?success=successfully updated");
       }else {
          header("Location: ../update.php?id=$id&error=unknown error occurred&$product_data");
       }
	}
}else {
	header("Location: view_products.php");
}