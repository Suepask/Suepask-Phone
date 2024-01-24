<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="buy.css">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
    <!-- คำนวน -->
    <?php
        if(isset($_POST['bt'])){
            $a = 12990;
            $b = $_POST['n'];

            $c = $a * $b;
            $_SESSION['a'] = $a;
            $_SESSION['b'] = $b;
            $_SESSION['c'] = $c;
            
            if($c<13000){
                $sum = ($c * 10)/100;
                $sum1 = $c - $sum; 
                
                $per = 10;
                
                $_SESSION['sum1'] = $sum1;
                $_SESSION['per'] = $per;
                
            }
            else if($c<50000){
                $sum = ($c * 15)/100;
                $sum1 = $c - $sum; 
                
                $per = 15;

                $_SESSION['sum1'] = $sum1;
                $_SESSION['per'] = $per;
            }
            else {
                $sum = ($c * 20)/100;
                $sum1 = $c - $sum; 
                
                $per = 20;
                
                $_SESSION['sum1'] = $sum1;
                $_SESSION['per'] = $per;
            }
            
            
            
            // echo $_SESSION['c'];

        }
    ?>
    <div class="bp slide-fade">
        <div class="f">

            <div class="img">
                <img src="./imagevivoproduct/v1-1.jpg" alt="">
            </div>
            <div class="text">
                <b>รายละเอียดสินค้า</b><br><br>
                <b>Vivo V29 5G</b>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nulla animi tempore atque, molestias reiciendis minima necessitatibus. Molestias, corrupti doloremque.</p>
            </div>
            <div class="price">

            
                <p id="demo2">จำนวน  ชิ้น <br> ราคา  บาท <br> ส่วนลด % <br> ราคาสุทธิ  บาท</p>
                <!-- ราคา 12,990 บาท -->
                <input type="number" name="n" id="">
                <button type="submit" name="bt">ยืนยัน</button>
                <!-- <a onclick="plus()">เปลี่ยนจำนวนสินค้า</a> -->
            </div>
        </div>
    </div>
</form>

<?php if(isset($_POST['bt'])) {?>
<div class="show-box slide-fade">
<p id="demo2">จำนวน <?php echo $_SESSION['b']; ?> ชิ้น  
    ราคา <?php echo $_SESSION['a']; ?> บาท  
    ส่วนลด <?php echo $_SESSION['per']; ?>%  
    ราคาสุทธิ <?php echo $_SESSION['sum1'];?> บาท</p>
</div>
<?php } ?>
<div class="fup slide-fade">
       
        <form action="" method="post">
        <label for="">ชื่อ</label>
        <input style="font-family: PK Maehongson;" class="fup-box" type="text" name="fname" id="">
        <label for="">สกุล</label>
        <input style="font-family: PK Maehongson;" class="fup-box" type="text" name="lname" id="">
        <label for="">ที่อยู่</label>
        <input style="font-family: PK Maehongson;" class="fup-box" type="text" name="address" id=""><br> 
        <label for="">email</label>
        <input style="font-family: PK Maehongson;" class="fup-box" type="text" name="email" id="">
        <label for="">เบอร์โทรติดต่อ</label>
        <input style="font-family: PK Maehongson;" class="fup-box" type="text" name="phone" id="">
        <div class="fup-btn">
            <br>
            <input style="font-family: PK Maehongson;" type="submit" name="buy-btn" value="สั่งซื้อ"><br>
            <a href="buyitem1.php"><input style="font-family: PK Maehongson;" type="button" value="ยกเลิก"> </a>
            <!-- <input type="reset" value="reset"> -->
        </div>
        <br>
    </form>
    <?php
        if(isset($_POST['buy-btn'])){

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            
        
            
            echo '<div class= show-box slide-fade>';
            echo '</div>';
        
        
        
        
            echo '<br><br><br><label for="">ชื่อ </label>';
            echo '<input class="fup-box" type="text" name="fname" id="" value= '.$fname.' disabled =disabled>';
            echo '<label for="">สกุล </label>';
            echo '<input class="fup-box" type="text" name="fname" id="" value= '.$lname.' disabled =disabled>';
            echo '<label for="">ที่อยู่ </label>';
            echo '<input class="fup-box" type="text" name="fname" id="" value= '.$address.' disabled =disabled> <br>';
            echo '<label for="">email </label>';
            echo '<input class="fup-box" type="text" name="fname" id="" value= '.$email.' disabled =disabled>';
            echo '<label for="">เบอร์โทรติดต่อ </label>';
            echo '<input class="fup-box" type="text" name="fname" id="" value= '.$phone.' disabled =disabled>';
            
            
            echo '<div class="fup-btn">';
            echo '<a href="buysuccessvivo.php"><input style="font-family: PK Maehongson;" type="submit" value="ยืนยัน"></a><br>';
            echo '<a href="index2.php"><input style="font-family: PK Maehongson;" type="button" value="ยกเลิก"> </a>';
            echo '</div>';
            
            echo '<br><br><center><img src="qr109639.jpg" width="200px" alt=""></center><br><br><br><br>';

        }


    ?>


    <hr>




    
    


</div>

</body>
</html>