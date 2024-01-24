<?php
    session_start();
       if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = "You must log in first";
        header('location: register.php');
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($_SESSION['username']);
        header('location: register.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="time.js"></script>
    <link rel="shortcut icon" href="logo.png">
    <title>Suepsak Phone</title>

    <!-- <style>
.mySlides {display:none;}
</style> -->

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


</head>
<body onload="now()">
    
    <?php include('navbar2.php'); ?>


    <section class="Test">
    <marquee class="slide-time" id="dPanel" behavior="loop" direction="left">Here is some slide-in text... coming from the right.</marquee>
            <br><br><br>
    <div class="EX">
        <center>
            <div class="w3-content w3-section" style="max-width:1500px">
                <img class="mySlides fade" src="./wallHomepage/1.jpg" style="width:100%">
                <img class="mySlides fade" src="./wallHomepage/2new.jpg" style="width:100%">
                <img class="mySlides fade" src="./wallHomepage/3.jpg" style="width:100%">
            </div>
        </center>
        
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


    <!-- <nav>
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
                    <li><a href="index.php" class="logout-bt">Logout</a></li>
                </ul>
            </div>
        </div>
            
    </nav> !-->

 <!--     <section id="V29">
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
    </section> !-->

    <section id="help">
        <footer>
            <p>My Contece</p>
            <p>Following Facebook & instagram & Youtube </p>
            <div class="social">
                <a class="a1" href="https://www.facebook.com/profile.php?id=100003146286610">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                  </svg></a>
                <a class="a2" href="https://www.instagram.com/kazuto.png/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                  </svg></a>
                <a class="a3" href="https://www.youtube.com/channel/UChwybd7pzWOT1U3aBLo5KHA">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                    <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z"/>
                  </svg></a>
            </div>
        </footer>
    
        <div class="contact-me">
            <img src="" width="170">
            <p>Information Technology Departments (ITSKTC)</p>
            <a class="button-two">Create By | Suepsak Srimongkol</a>
        </div>
        </section>

</body>
</html>