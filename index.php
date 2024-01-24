<?php
    include('server.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png">
    <script src="time.js"></script>
    <title>Suepsak Phone</title>








</head>
<body onload="now()">
    
<?php include('navbar.php'); ?>
       
    
    
    <!-- <div class="time">
        <div id="dPanel"></div>
    </div> -->
    
<style>

    .fade {
        animation-name: fade;
        animation-duration: 1.5s;
    }
    
    @keyframes fade {
        from {opacity: 0} 
        to {opacity: 1}
    }
    
</style>


    <section class="Test">
        <marquee class="slide-time" id="dPanel" behavior="loop" direction="left">Here is some slide-in text... coming from the right.</marquee>
            <br><br><br>
            <div class="EX">

                    <div class="w3-content w3-section" style="max-width:1500px">
                        <img class="mySlides fade" src="./wallHomepage/1.jpg" style="width:100%">
                        <img class="mySlides fade" src="./wallHomepage/2new.jpg" style="width:100%">
                        <img class="mySlides fade" src="./wallHomepage/3.jpg" style="width:100%">
                    </div>

                
                <script>
                    var myIndex = 0;
                    carousel();
                    
                    function carousel() {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";  
                        }
                        myIndex++;
                        if (myIndex > x.length) {myIndex = 1}    
                        x[myIndex-1].style.display = "block";  
                        setTimeout(carousel, 4000); // Change image every 2 seconds
                    }
                </script>
            </div>
            <br><br><br>
        </section>
        


       

<!-- <section>

    
    <div id="slider">
        <input type="radio" name="slider" id="slide1" checked>
        <input type="radio" name="slider" id="slide2">
        <input type="radio" name="slider" id="slide3">
        <input type="radio" name="slider" id="slide4">
        <div id="slides">
            <div id="overflow">
                <div class="inner">
                    <div class="slide slide_1">
               <div class="slide-content">
                  <h2>Slide 1</h2>
                  <p>Content for Slide 1</p>
               </div>
            </div>
            <div class="slide slide_2">
                <div class="slide-content">
                    <h2>Slide 2</h2>
                    <p>Content for Slide 2</p>
                </div>
            </div>
            <div class="slide slide_3">
                <div class="slide-content">
                    <h2>Slide 3</h2>
                    <p>Content for Slide 3</p>
                </div>
            </div>
            <div class="slide slide_4">
                <div class="slide-content">
                  <h2>Slide 4</h2>
                  <p>Content for Slide 4</p>
               </div>
            </div>
        </div>
    </div>
   </div>
   <div id="controls">
       <label for="slide1"></label>
       <label for="slide2"></label>
       <label for="slide3"></label>
      <label for="slide4"></label>
   </div>
   <div id="bullets">
       <label for="slide1"></label>
       <label for="slide2"></label>
       <label for="slide3"></label>
       <label for="slide4"></label>
    </div>
</div>
        

</section> -->

        





<!-- register <nav>
    <div class="container">
        <div class="nav-con">
            <div class="logo">
                <a href="index.php"><img src="logo.png" width="100" height="100" alt=""></a>
            </div>
                <ul class="menu">
                    <li><a href="#V29">หน้าแรก</a></li>

                    
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropbtn">สินค้า</a>
                                <div class="dropdown-content">
                                    <a href="#">Vivo</a>
                                    <a href="#">Oppo</a>
                                    <a href="#">Samsung</a><br>
                                </div>
                            </li>
                    <li><a href="#s23">คำนวณ</a></li>
                    <li><a href="#help">ติดต่อ</a></li>
                    <li><a href="">Java</a></li>
                    <li><a href="register.php">สมัครสมาชิก</a></li>
                </ul>
            </div>
        </div>
            
    </nav> !-->
 
    <!--  <section id="V29">
        <div class="image">
            <h1 class="text">Vivo V29 5G</h1>
            <p class="text2">ออร่าพอร์ตเทรต พิเศษทุกความรู้สึก</p><br>
            <div class="btn">
                <a class="button" href="#">สั่งซื้อเลยที่นี้</a>
            </div>
        </div>
    </section>

    <section id="Finen3">
        <div class="image2">
            <h1 class="text">OPPO Find N3 Flip</h1>
            <p class="text2">พับกับกล้องที่ดีกว่า</p>
        </div>
    </section>

    <section id="s23">
        <div class="image3">
            <h1 class="text">Samsung s23 / s23 Ultra</h1>
            <p class="text3">กล้องคมชัด ซูมระดับ100x</p>
        </div>
    </section>

    <section id="End">
        <div class="End2">
            <footer>
                Copyright &copy;2010<br /> Updated; <time datetime="2010-11-11">25 june 2012</time><br>Suepsak Srimongkol
            </footer>
        </div>
    </section>

!-->




    <?php include('helpandcontact.php'); ?>






<script src="app.js"></script>
      

</body>
</html>