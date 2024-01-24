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
        from {margin-top: 4rem;}
        from {opacity: 0} 
        to {margin-top: 0;}
        to {opacity: 1}
    }
</style>
    
    <?php include('navbar2.php'); ?>

    <div class="container-product slide-fade">
        <div class="product-con">
            <div class="product-item">
                <div class="product-img">
                    <a href="item1log.php"><img src="./imageoppoproduct/opf1.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                <b> OPPO Find N3 Flip </b> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, saepe.</p>
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
                    <a href="item2log.php"><img src="./imageoppoproduct/opr1.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                   <b> OPPO Reno10 Pro </b> <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, quam.</p>
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
                    <a href="item1log.php"><img src="./imageoppoproduct/opre2.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                    <b> OPPO Reno10 </b> <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, quam.</p>
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
                    <a href="item1log.php"><img src="./imageoppoproduct/opf1.jpg" alt=""></a>
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
                    <a href="item1log.php"><img src="./imageoppoproduct/opf1.jpg" alt=""></a>
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
                    <a href="item1log.php"><img src="./imageoppoproduct/opre1.jpg" alt=""></a>
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
                    <a href="item1log.php"><img src="./imageoppoproduct/opre2.jpg" alt=""></a>
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
                    <a href="item1log.php"><img src="./imageoppoproduct/opre1.jpg" alt=""></a>
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
                    <a href="item1log.php"><img src="./imageoppoproduct/opr1.jpg" alt=""></a>
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
                        <a href="item1log.php"><img src="<?php echo $imageURL; ?>" alt="" width="100%" class="card-img"></a>
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