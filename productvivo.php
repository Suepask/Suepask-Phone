<?php include('dbconfig.php'); 
    $query = "SELECT * FROM images";
    $result = $db->query($query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png">
    <title>Document</title>

</head>
<body>


<style>
    .slide-fade {
        animation: slide-fade;
        animation-duration: 1.5s;
    }

    @keyframes slide-fade {
        from {margin-top: 8rem;}
        from {opacity: 0} 
        to {margin-top: 0;}
        to {opacity: 1}
    }
</style>
    
    <?php include('navbar.php'); ?>

    <div class="container-product slide-fade">
        <div class="product-con">
            <div class="product-item">
                <div class="product-img">
                    <a href="item1.php"><img src="./imagevivoproduct/v1-2.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                <b> Vivo V29 5G </b> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, saepe.</p>
                </div>
                <div class="product-price">
                    <div class="product-left">
                        $13,999
                    </div>
                    <div class="product-right">
                        <span>ขายแล้ว 18 ชิ้น</span>
                    </div>
                </div>
            </div>


            <div class="product-item">
                <div class="product-img">
                    <a href="item2.php"><img src="./imagevivoproduct/v2-1.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                   <b> Vivo V27 5G </b> <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, quam.</p>
                </div>
                <div class="product-price">
                    <div class="product-left">
                        $13,999
                    </div>
                    <div class="product-right">
                        <span>ขายแล้ว 18 ชิ้น</span>
                    </div>
                </div>
            </div>



            <div class="product-item">
                <div class="product-img">
                    <a href="item1.php"><img src="./imagevivoproduct/v1.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                    <b> Vivo V27 5G </b> <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, quam.</p>
                </div>
                <div class="product-price">
                    <div class="product-left">
                        $13,999
                    </div>
                    <div class="product-right">
                        <span>ขายแล้ว 18 ชิ้น</span>
                    </div>
                </div>
            </div>



            <div class="product-item">
                <div class="product-img">
                    <a href="item1.php"><img src="./imagevivoproduct/v2-4.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                    <b> Vivo V27 5G </b> <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, quam.</p>
                </div>
                <div class="product-price">
                    <div class="product-left">
                        $13,999
                    </div>
                    <div class="product-right">
                        <span>ขายแล้ว 18 ชิ้น</span>
                    </div>
                </div>
            </div>


            <div class="product-item">
                <div class="product-img">
                    <a href="item1.php"><img src="./imagevivoproduct/v1-1.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                    <b> Vivo V27 5G </b> <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, quam.</p>
                </div>
                <div class="product-price">
                    <div class="product-left">
                        $13,999
                    </div>
                    <div class="product-right">
                        <span>ขายแล้ว 18 ชิ้น</span>
                    </div>
                </div>
            </div>


            <div class="product-item">
                <div class="product-img">
                    <a href="item1.php"><img src="./imagevivoproduct/v1-4.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                    <b> Vivo V27 5G </b> <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, quam.</p>
                </div>
                <div class="product-price">
                    <div class="product-left">
                        $13,999
                    </div>
                    <div class="product-right">
                        <span>ขายแล้ว 18 ชิ้น</span>
                    </div>
                </div>
            </div>


            <div class="product-item">
                <div class="product-img">
                    <a href="item1.php"><img src="./imagevivoproduct/v1-3.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                    <b> Vivo V27 5G </b> <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, quam.</p>
                </div>
                <div class="product-price">
                    <div class="product-left">
                        $13,999
                    </div>
                    <div class="product-right">
                        <span>ขายแล้ว 18 ชิ้น</span>
                    </div>
                </div>
            </div>


            <div class="product-item">
                <div class="product-img">
                    <a href="item1.php"><img src="./imagevivoproduct/v2-2.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                    <b> Vivo V27 5G </b> <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, quam.</p>
                </div>
                <div class="product-price">
                    <div class="product-left">
                        $13,999
                    </div>
                    <div class="product-right">
                        <span>ขายแล้ว 18 ชิ้น</span>
                    </div>
                </div>
            </div>


            <div class="product-item">
                <div class="product-img">
                    <a href="item1.php"><img src="./imagevivoproduct/v2-3.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                    <b> Vivo V27 5G </b> <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, quam.</p>
                </div>
                <div class="product-price">
                    <div class="product-left">
                        $13,999
                    </div>
                    <div class="product-right">
                        <span>ขายแล้ว 18 ชิ้น</span>
                    </div>
                </div>
            </div>


            <?php //asdasdasdasdadadadad
                while($row = mysqli_fetch_array($result)){
                    $imageURL = 'uploads/'.$row['file_name'];
                ?>
                <div class="product-item">
                    <div class="product-img">
                        <a href="item1.php"><img src="<?php echo $imageURL; ?>" alt="" width="100%" class="card-img"></a>
                    </div>
                    <div class="product-detail">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi, illo.
                    </div>
                    <div class="product-price">
                        <div class="product-left">
                            $13,999
                        </div>
                        <div class="product-right">
                            <span>ขายแล้ว 18 ชิ้น</span>
                        </div>
                    </div>
                </div>
            <?php     
                }
            ?>



        </div>
    </div>
<br><br>

    <?php include('helpandcontact.php'); ?>

</body>
</html>