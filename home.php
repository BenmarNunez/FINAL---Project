<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['admin_name'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
    <h1>Hello, <?php echo $_SESSION['name']; ?></h1><br>
    <a href="view_products.php" class="link-primary">View Product</a><br>
    <a href="logout.php">Logout</a>
</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>