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
                    <a href="item1log.php"><img src="./imagesamsungproduct/s23n.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                    Samsung S23 <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum, saepe.</p>
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
                    <a href="item1log.php"><img src="./imagesamsungproduct/s23+.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                    Samsung S23 Plus <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, quam.</p>
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
                    <a href="item1log.php"><img src="./imagesamsungproduct/s23n.jpg" alt=""></a>
                </div>
                <div class="product-detail">
                    Samsung S23 fe <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel!</p>
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
                    <a href="item1log.php"><img src="./imagesamsungproduct/s23u-1.jpg" alt=""></a>
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


            <div class="product-item">
                <div class="product-img">
                    <a href="item1log.php"><img src="./imagesamsungproduct/s23u-2.jpg" alt=""></a>
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


            <div class="product-item">
                <div class="product-img">
                    <a href="item1log.php"><img src="./imagesamsungproduct/s23u-3.jpg" alt=""></a>
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


            <div class="product-item">
                <div class="product-img">
                    <a href="item1log.php"><img src="./imagesamsungproduct/s23u-4.jpg" alt=""></a>
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


            <div class="product-item">
                <div class="product-img">
                    <a href="item1log.php"><img src="./imagesamsungproduct/s23n.jpg" alt=""></a>
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



            <!-- <div class="row">
            <?php 
                if(!empty($statusMsg)) { ?>
                    <div class="alert alert-secondary" role="alert">
                        <?php echo $statusMsg; ?>
                    </div>
               <?php } ?>
               <div>
                   <div class="row g-2">
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                       <?php 
                        $query = $db->query("SELECT * FROM images" );
                        if($query->num_rows > 0 ) {
                            $imageURL = 'uploads/'.$row['file_name'];
                            while($row = $query->fetch_assoc()) {
                        ?>
                                <div class="product-item">
                                            <div class="product-img">
                                                <a href="item1.php"><img src="<?php echo $imageURL; ?>" alt="" width="100%" class="card-img"></a>
                                            </div>
                                            <div class="product-detail">
                                                Samsung S23 Plus <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo, quam.</p>
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
                                    </div>
                                </div>
                                <?php
                            }
                        }   else{ ?>
                            <p>No image found...</p>
                        <?php } ?>
                        
                   
                </div>
               </div>
        </div> -->






        </div>
    </div>
<br><br>

    <?php include('helpandcontact.php'); ?>



    

</body>
</html>