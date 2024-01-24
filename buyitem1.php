<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buy</title>
</head>
    <!-- <a href="">สั่งซื้อ</a> -->
    
    <style>
    html{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: PK Maehongson;
    }



    .slide-fade {
        animation: slide-fade;
        animation-duration: 1.5s;
    }

    @keyframes slide-fade {
        from {margin-top: 3rem;}
        from {opacity: 0} 
        to {margin-top: 0;}
        to {opacity: 1}
    }

    
    
    .bp {
        padding: 2rem;
        display: flex;
        /* border: 1px solid red; */
        gap: 1rem;
    }
    
    .bp .f{
        margin-right: auto;
        margin-left: auto;
        padding: 2rem;
        display: flex;
        /* border: 1px solid red; */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        transition: all 0.3s;
        outline: 1px solid white;
        gap: 1rem;
    }
    
    .bp .f:hover{
        outline: 1px solid green;
    }
    
    .bp .text{
    
        display: block;
        width: 500px;
        /* border: 1px solid red; */
    }
    
    .bp .img img{
        /* border: 1px solid red; */
        display: flex;
        width: 190px;
    }
    
    .bp .price{
        padding: 1rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        /* border: 1px solid red; */
        width: 130px;
    }
    
    .bp .price input{
        width: 50px;
        display: block;
        /* margin-top: 2rem; */
    }

    .bp .price button{
        margin-top: 1rem;
    }
    
    .bp .price input:hover{
        cursor: pointer;
        color: blue;
    }
    
    .show-box p{
        font-size: 20px;
        width: 800px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        justify-content: center;
        text-align: center;
    }

    .textshop{
        text-decoration: none;
    }
    
    .show-box .textshop a{
        text-decoration: none;
    }


    </style>
    
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
            
            
            
            echo $_SESSION['c'];

        }
    ?>
    <div class="bp slide-fade">
        <div class="f">

            <div class="img">
                <img src="v1-1.jpg" alt="">
            </div>
            <div class="text">
                <b>รายละเอียดสินค้า</b><br><br>
                <b>Vivo V29 5G</b>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nulla animi tempore atque, molestias reiciendis minima necessitatibus. Molestias, corrupti doloremque.</p>
            </div>
            <div class="price">

            
                <p id="demo2">จำนวน <?php echo $_SESSION['b']; ?> ชิ้น <br> ราคา <?php echo $_SESSION['a']; ?> บาท <br> ส่วนลด <?php echo $_SESSION['per']; ?>% <br> ราคาสุทธิ <?php echo $_SESSION['sum1']?> บาท</p>
                <!-- ราคา 12,990 บาท -->
                <input type="number" name="n" id="">
                <button type="submit" name="bt">ยืนยัน</button>
                <!-- <a onclick="plus()">เปลี่ยนจำนวนสินค้า</a> -->
            </div>
        </div>
    </div>
</form>















<!-- <script>
        
    function plus(){

        a = 12990;
        var b = prompt();

        prompt = parseInt(a);
        prompt = parseInt(b);
        
        c = a * b;


        if(c<13000){
            ss = 10;
            sum = (c * 10)/100;
            sum1 = c - sum; 

        document.getElementById("demo2").innerHTML = "จำนวน " + b + " ชิ้น"+ "<br>" + "ราคา " + c + " บาท" + "<br>" + " ส่วนลด " + ss + "%"  + "<br>" + "ราคาสุทธิ  " + sum1 + " บาท";
        document.getElementById("demo").innerHTML = "สินค้าจำนวน " + b + " ชิ้น" + " ราคา " + c + " บาท ซื้อของมากว่า 10,000 บาท ได้รับส่วนลด 10%" + " ราคารวมสุทธิ " + sum1 + " บาท" 
        // + "<br><br><br><a class=textshop href=bill.php>สั่งซื้อ</a> <a class=textshop href=item1log.php>ยกเลิก</a>"
        ;
        
        } 


        else if(c<=50000){
            ss2 = 15;
            sum = (c * 15)/100;
            sum1 = c - sum;

        document.getElementById("demo2").innerHTML = "จำนวน " + b + " ชิ้น"+ "<br>" + "ราคา " + c + " บาท" + "<br>" + " ส่วนลด " + ss2 + "%"  + "<br>" + "ราคาสุทธิ  " + sum1 + " บาท";
        document.getElementById("demo").innerHTML = "สินค้าจำนวน " + b + " ชิ้น" + " ราคา " + c + " บาท ซื้อของมากว่า 20,000 บาท ได้รับส่วนลด 15%" + " ราคารวมสุทธิ " + sum1 + " บาท" 
        // + "<br><br><br><a class=textshop href=bill.php>สั่งซื้อ</a> <a class=textshop href=item1log.php>ยกเลิก</a>"
        ;

        }
        
        else{
            ss2 = 20;
            sum = (c * 20)/100;
            sum1 = c - sum;

        document.getElementById("demo2").innerHTML = "จำนวน " + b + " ชิ้น"+ "<br>" + "ราคา " + c + " บาท" + "<br>" + " ส่วนลด " + ss2 + "%"  + "<br>" + "ราคาสุทธิ  " + sum1 + " บาท";
        document.getElementById("demo").innerHTML = "สินค้าจำนวน " + b + " ชิ้น" + " ราคา " + c + " บาท ซื้อของมากว่า 50,000 บาท ได้รับส่วนลด 20%" + " ราคารวมสุทธิ " + sum1 + " บาท"
        //  + "<br><br><br><a class=textshop href=bill.php>สั่งซื้อ</a> <a class=textshop href=item1log.php>ยกเลิก</a>"
         ;

        }



        // sum = (c * 10)/100;
        // sum1 = c - sum;
        
        // document.getElementById("demo2").innerHTML = "จำนวน " + b + " ชิ้น"+ "<br>" + "ราคา " + c + " บาท" + "<br>" + " ส่วนลด " + ss + "%"  + "<br>" + "ราคาสุทธิ  " + sum1 + " บาท";
        // document.getElementById("demo").innerHTML = "สินค้าจำนวน " + b + " ชิ้น" + " ราคา " + a + " บาท" + " ราคารวมสุทธิ " + sum1 + " บาท" + "<br><br><br><a href=buysuccessvivo.php>สั่งซื้อ</a> <a href=item1log.php>ยกเลิก</a>";

        
    }

</script> -->

<div class="show-box slide-fade">
<p id="demo2">จำนวน <?php echo $_SESSION['b']; ?> ชิ้น  
    ราคา <?php echo $_SESSION['a']; ?> บาท  
    ส่วนลด <?php echo $_SESSION['per']; ?>%  
    ราคาสุทธิ <?php echo $_SESSION['sum1']?> บาท</p>
</div>


<style>


.fup{
    margin-left: auto;
    margin-right: auto;
    width: 1100px;
    padding: 2rem;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    transition: all 0.3s;
    outline: 1px solid white;
}

.fup:hover{
    outline: 1px solid green;
}

.fup-box{
  
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 12px;
    font-size: 20px;
    color: green;
    padding: .5rem;
    /* border: 1px solid red; */
    transition: all .3s;
}




.fup label{
    margin-left: 2rem;
    /* border: 1px solid red; */
    font-size: 25px;
}

.fup-btn a{
    font-size: 25px;
    text-decoration: none;
    /* border: 1px solid red; */
}

.fup-btn input{
    font-size: 20px;
    margin-right: auto;
    margin-left: auto;
    justify-content: center;
    display: block;
    width: 70px;
    height: 40px;


}


</style>


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


<style>
    .fup-btn a{
    font-size: 25px;
    text-decoration: none;
    /* border: 1px solid red; */
}
</style>

    
    


</div>





</body>
</html>