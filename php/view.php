<?php

include "db_conn.php";

$sql = "SELECT * FROM products_tb ORDER BY id ASC";
$result = mysqli_query($conn, $sql);