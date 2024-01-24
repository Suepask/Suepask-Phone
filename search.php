<?php
    include('server.php');

    // if(isset($_POST['submit'])){

    //     $username = mysqli_real_escape_string($conn, $_POST['username']);
    //     $password = mysqli_real_escape_string($conn, $_POST['password']);

    //     $sql = "SELECT * FROM user WHERE username LIKE '%$search%'";
    //     $result = $conn->query($sql);
    
    //     if($result->num_rows > 0){
    //         while ($row = $result->fetch_assoc()) {
    //             echo "username"."<br>". $row['username']."<br>";
    //             echo "email"."<br>". $row['email'] . "<br>";
    //             echo "address"."<br>". $row['address']. "<br>";
    //         } 
    //     }
    //      else{
    //         echo "error";
    //     }
    
    
    //     $conn->close();

    // }



    isset( $_POST['search'] ) ? $search = $_POST['search'] : $search = "";
    if( !empty( $search ) ) {
        $c = mysqli_connect( "localhost", "root", "", "register_db" );
        mysqli_query( $c, "SET NAMES UTF8" );
        echo "<br><br><br><br><div class='container'>
        <table class='tb'>
        <tr>
        <td class='tdname' width='5%'>No.</td>
        <td class='tdname' width='5%'>Username</td>
        <td class='tdname' width='15%'>Email</td>
        <td class='tdname' width='30%'>Address</td>
        <td class='tdname'>Numbaer Phone</td>
        <td class='tdname'>Full Name</td>
        </tr> </div>";
        


        $sql = " SELECT * FROM user WHERE  username LIKE '%".$search."%'  ";
        $q = mysqli_query( $c, $sql );
        $no = 1;

        while( $f = mysqli_fetch_assoc( $q ) ) {
                     
            echo "<tr class='trname'>";
                    echo "<td>" .$f["id"]. "</td>";
                    echo "<td>" .$f["username"]. "</td>";
                    echo "<td>" .$f["email"]. "</td>";
                    // echo "<td>" .$row["password"]. "</td>";
                    echo "<td>" .$f["address"]. "</td>";
                    echo "<td>" .$f["phone"]. "</td>";
                    echo "<td>" .$f["name"]. "</td>";

                
                    echo "</tr>";

        }
        $no++;

        
        echo "</table>";
        mysqli_close( $c );
    }







?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
    <link rel="shortcut icon" href="logo.png">
</head>
<body>
    <br><br>
<div class="text-bottom-table">

<a href="table.php">กลับ</a>
<!-- <a href="renew.php">สมัคร</a> -->

</div>
</body>
</html>