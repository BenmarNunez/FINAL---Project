<?php  

if(isset($_GET['id'])){
   include "../db_conn.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM products_tb
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../view_products.php?success=successfully deleted");
   }else {
      header("Location: ../view_products.php?error=unknown error occurred&$product_data");
   }

}else {
	header("Location: ../view_products.php");
}