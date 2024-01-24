<?php 
    include("data-table.php");
    $id = $_REQUEST['id'];
    $sql = "DELETE FROM user WHERE id='$id' ";
    $result = mysqli_query($connect, $sql);

    if($result){
        echo "<script>alert('ลบข้อมูลสำเร็จ');</script>";
        echo "<script>window.location = 'table.php';</script>";

    }
    else{
        echo "<script type='text/javascript'>";
        echo "alert(ERROR)";
        echo "</scrip>";

    }
?>

<script></script>