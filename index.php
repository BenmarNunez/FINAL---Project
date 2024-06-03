<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<div class="wrapper">
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])){ ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <div class="input-box">
        <input type="text" name="uname" placeholder="Admin Name" required>
        <i class='bx bxs-user'></i>
        </div>

        <div class="input-box">
        <input type="password" name="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt'></i>

        <button type="submit" class='btn'>Login</button>
    </form>
        </div>
    
</body>
</html>