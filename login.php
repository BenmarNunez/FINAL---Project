<?php
session_start();
include "db_conn.php";

if (isset($_POST['uname'])  && isset($_POST['uname'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = $_POST['uname'];
    $password = $_POST['password'];

    if (empty($uname)) {
        header("Location: index.php?error=User name is required");
        exit();
    }else if(empty($password)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM admin WHERE admin_name = '$uname' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['admin_name'] === $uname && $row['password'] === $password){
                $_SESSION['admin_name'] = $row['admin_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            }else{
                header("Location: index.php?error=Incorrect User name  or password");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorrect User name  or password");
            exit();
        }
    }

}else{
    header("Location: index.php");
    exit();
}