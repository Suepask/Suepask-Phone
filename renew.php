
<?php
    include('server.php');
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration | Suepsak Phone</title>
  <link rel="stylesheet" type="text/css" href="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="logo.png">
</head>
<body class="bg">


<?php include('navbar.php'); ?>



    <!--<nav>
        <div class="container">
            <div class="nav-con">
                <div class="logo">
                    <a href="index.html"><img src="logo.png" width="100" height="100" alt=""></a>
                </div>
                <ul class="menu">
                    <li><a href="index.php">หน้าแรก</a></li>
                    <li><a href="#">คำนวณ</a></li>
                    <li><a href="#help">ติดต่อ</a></li>
                    <li><a href="">Java</a></li>
                    <li><a href="register.php">สมัครสมาชิก</a></li>
                </ul>
            </div>
        </div>
            
    </nav> !-->


    
    
  <div class="wrapper">
    <!-- register -->
    <div class="form-wrapper sign-up">
      <form name="form" action="register_db.php" method="post">
        <h2>Sign Up</h2>
        <div class="input-group">
          <input type="text" name="username" required>
          <label for="username">Username</label>
        </div>
        <div class="input-group">
          <input type="email" name="email" required>
          <label for="email">Email</label>
        </div>
        <div class="input-group">
          <input type="password" name="password_1" required>
          <label for="password_1">Password</label>
        </div>
        <div class="input-group">
          <input type="password" name="password_2" required>
          <label for="password_2">Confirm Password</label>
        </div>
        <div class="input-group">
          <input type="text" name="address" required>
          <label for="address">Address</label>
        </div>
        <div class="input-group">
          <input type="number" name="phone" required>
          <label for="phone">Number Phone</label>
        </div>
        <div class="input-group">
          <input type="text" name="name" required>
          <label for="name">Full Name</label>
        </div>
        <div class="input-member">
                <label class="text-member" for="">Member Level: </label>
                <select name="Member" id="Member">
                    <option value="a">Admin</option>
                    <option value="m">User</option>
                </select>
            </div><br>
        <!-- <div class="remember">
          <label><input type="checkbox"> I agree to the terms & conditions</label>
        </div> -->
        <br>
        <button type="submit" name="reg_user" class="btn">Sign Up</button>
        <br><br>
        <div class="signUp-link">
          <p>ถ้าคุณมีบัญชีแล้ว <a href="lognew.php" class="signInBtn-link">เข้าสู่ระบบได้ที่นี้</a></p>
        </div>
      </form>
    </div>
  </div>


  <?php include('helpandcontact.php'); ?>


</body>
</html>