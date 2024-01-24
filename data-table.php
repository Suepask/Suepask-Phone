<?php 
    $connect = new mysqli("localhost","root","","register_db");
    if($connect) {
        // echo "connected register_db";
    }
    
    $sql = "SELECT * FROM user"; 
    $result = $connect->query($sql);
    echo "<br><br>";

?>
