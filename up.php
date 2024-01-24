<?php 
    include('data-table.php');

    if($_POST['id'] == '') {
        echo "<script>alert('Error');window.location = 'renew.php';</script>";
    }

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address =  $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];

    $sql = "UPDATE user SET username = '$username', email = '$email' , address =  '$address' , phone = '$phone' , name = '$name' WHERE id = $id";
    $result = mysqli_query($connect,$sql);

    if(mysqli_affected_rows($connect) > 0){
        echo "<script>alert('update successfuly'); window.location ='table.php';</script>";
    }
    
    else {
        echo "<script>alert('Error'); window.location ='table.php';</script>";
    }
?>
