


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<?php 

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

?>





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
    
    .bp .price a{
        display: block;
        margin-top: 2rem;
    }
    
    .bp .price a:hover{
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

        
            <p id="demo2">จำนวน 1 ชิ้น <br> ราคา 12,990 บาท <br> ส่วนลด 10% <br> ราคาสุทธิ 11,691 บาท</p>
            <!-- ราคา 12,990 บาท -->

            

        </div>



    </div>
    
    
    
</div>




<div class="show-box slide-fade">
        <p class=textshop id="demo">สินค้าจำนวน 1 ชิ้น ราคา 12,990 บาท ซื้อของมากว่า 10,000 บาท ได้รับส่วนลด 10% ราคารวมสุทธิ 11,691 บาท </p>
</div><br>




<style>

*{
    font-family: PK Maehongson;
}



.fup{
    margin-left: auto;
    margin-right: auto;
    width: 1400px;
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


.fup img{
    margin-left: auto;
    margin-right: auto;
    display: block;
}


</style>


<div class="fup slide-fade">

        <img src="qr109639.jpg" width="200px" alt=""><br><br><br><br>

        <label for="">ชื่อ</label>
        <input class="fup-box" type="text" name="fname" id="" value="<?php echo $fname; ?>" disabled ='disabled'>
        <label for="">สกุล</label>
        <input class="fup-box" type="text" name="lname" id="" value="<?php echo $lname; ?>" disabled ='disabled'>
        <label for="">ที่อยู่</label>
        <input class="fup-box" type="text" name="address" id="" value="<?php echo $address; ?>" disabled ='disabled'>
        <br> <label for="">email</label>
        <input class="fup-box" type="text" name="email" id="" value="<?php echo $email; ?>" disabled ='disabled'>
        <label for="">เบอร์โทรติดต่อ</label>
        <input class="fup-box" type="text" name="phone" id="" value="<?php echo $phone; ?>" disabled ='disabled'>
        <br>
        <br>

        <div class="fup-btn">
            <br>
            <a href="buysuccessvivo.php"><input style="font-family: PK Maehongson;" type="submit" value="ยืนยัน"></a><br>
            <a href="index2.php"><input style="font-family: PK Maehongson;" type="button" value="ยกเลิก"> </a>
            <!-- <input type="reset" value="reset"> -->
        </div>

</div>

<br><br><br>




</body>
</html>

