<?php 
    include("data-table.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect</title>
    <link rel="shortcut icon" href="logo.png">
    <link rel="stylesheet" href="table.css">
</head>
<body>
    
    
    <br>
    <form action="search.php" method="post" style="margin-left: 2rem;">

        <label for="">ค้นหา :</label>
        <input type="text" name="search" id="">
        <input type="submit" name="submit" value="ค้นหา">

    </form>

    <br>
    <div class="container">
        <table class="tb">
            <tr>
                <td class="tdname" width="5%">Id</td>
                <td class="tdname" width="5%">Username</td>
                <td class="tdname" width="15%">Email</td>
                <!-- <td class="tdname" width="15%">Password</td> -->
                <td class="tdname" width="30%">Address</td>
                <td class="tdname" width="8%">Number Phone</td>
                <td class="tdname" width="30%">Full Name</td>
                <td class="tdname" width="5%">Level</td>
                <td class="tdname" width="5%">Edit</td>
                <td class="tdname" width="10%">Delete</td>
            </tr>
            
            <?php 
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr class='trname'>";
                    echo "<td>" .$row["id"]. "</td>";
                    echo "<td>" .$row["username"]. "</td>";
                    echo "<td>" .$row["email"]. "</td>";
                    // echo "<td>" .$row["password"]. "</td>";
                    echo "<td>" .$row["address"]. "</td>";
                    echo "<td>" .$row["phone"]. "</td>";
                    echo "<td>" .$row["name"]. "</td>";
                    echo "<td>" .$row["Member"]. "</td>";
                    echo "<td><a href='fup.php?id=$row[id]'>Edit</a></td>";
                    echo "<td><a href='delete-data-table.php?id=$row[id]'>Delete</a></td>";
                    echo "</tr>";
                }
                
            ?>
                    
        </table>
        <br><br>
        <div class="text-bottom-table">

            <a href="admin.php">กลับ</a>
            <!-- <a href="renew.php">สมัคร</a> -->

        </div>

        
    </div>
     

</body>
</html>