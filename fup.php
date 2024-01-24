<?php 
    include('data-table.php');

    $id = mysqli_real_escape_string($connect,$_GET['id']);
    $sql = "SELECT * FROM user WHERE id = '$id' ";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_array($result);
    extract($row);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="fup">

        <form action="up.php" method="post">
            <label for="">ID</label>
            <input class="fup-box" type="text" name="id" id="" value="<?php echo $id;?>"disabled ='disabled'><br>
        <input class="fup-box" type="hidden" name="id" id="" value="<?php echo $id; ?>">
        <label for="">Usaename</label>
        <input class="fup-box" type="text" name="username" id="" value="<?php echo $username; ?>">
        <label for="">Email</label>
        <input class="fup-box" type="text" name="email" id="" value="<?php echo $email; ?>">
        <!-- <label for="">password</label><br>
        <input class="box" type="text" name="password" id="" value="<?php echo $password; ?>"><br> -->
    <label for="">Address</label>
        <input class="fup-box" type="text" name="address" id="" value="<?php echo $address; ?>">
       <br> <label for="">phone</label>
        <input class="fup-box" type="text" name="phone" id="" value="<?php echo $phone; ?>">
        <label for="">Full Name</label>
        <input class="fup-box" type="text" name="name" id="" value="<?php echo $name; ?>">
        <div class="fup-btn">
            <br>
            <input type="submit" value="submit">
            <a href="table.php">Back</a>
            <!-- <input type="reset" value="reset"> -->
        </div>
        <br>
    </form>
</div>
    
</body>
</html>
