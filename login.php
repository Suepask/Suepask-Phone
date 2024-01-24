<?php
    session_start();
    include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<body>
    <nav>
        <div class="container">
            <div class="nav-con">
                <div class="logo">
                    <a href="#">Navbar</a>
                </div>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">คำนวน</a></li>
                    <li><a href="#">ผู้จัดทำ</a></li>
                </ul>
                <div class="Regis-Login">
                    <a href="register.php" class="Register">Register</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form action="login_db.php" method="post">
        <?php if(isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">Username:</label>
            <input type="text" name="username">
        </div>

        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login_user" class="btn">Login</button>
        </div>
        <div class="regis-bt">
            <p>Not yet a member? <a href="register.php"><span style="color: red">Sing Up</span></a></p>
        </div>
        
    </form>
</body>
</html>