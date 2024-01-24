<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png">
</head>
<body>
    
<?php include('navbar2.php'); ?>

<br><br><br><br><br>
<section class="admin">
    <img src="./admin/meme bike.jpg" width="250px">
    <div class="textadmin">
        <p>Admin-ID = 001/Admin1</p>
        <br>
        <a href="table.php">แก้ไขข้อมูล User</a>
        <ul>
                    <li class="dropdown">
                        <a class="add" href="">เพิ่มสินค้า</a>
                        <!-- <i class="fa-solid fa-chevron-down"></i> -->
                        <ul class="sub-menu">
                            <li><a href="uploadimg.php"><span>Vivo</span></a></li>
                            <li><a href="uploadimg.php"><span>Oppo</span></a></li>
                            <li><a href="uploadimg.php"><span>Samsung</span></a></li>
                        </ul>
                    </li>
                </ul>
<br>



<div class="note-admin">
      <p>สินค้าคงเหลือ 100 รายการ</p>
      <p>Vivo 60 รายการ</p>
      <p>Oppo 20 รายการ</p>
      <p>Samsung 20 รายการ</p>

  </div>  
    </div>

</section>

</body>
</html>