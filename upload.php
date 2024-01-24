<?php 

include_once 'dbconfig.php';
$statusMsg = "";


// file upload

$targetDir = "uploads/";

if(isset($_POST['submit'])) {
    if(!empty($_FILES["file"]["name"])) {
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        // allow 
        $allowTypes = array('jpg','png','jpeg','gif','pdf');
        if(in_array($fileType,$allowTypes)){
            if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)){
                $insert = $db->query("INSERT INTO images(file_name, uploaded_on) VALUES ('".$fileName."', NOW()) ");
                if($insert) {
                    $statusMsg = "The file <b>" . $fileName . "</b> has been uploaded successsfuly";
                    header("location: uploadimg.php");
                } else {
                    $statusMsg = "File Upload Error";
                    header("location: uploadimg.php");
                } 
            } else {
                $statusMsg = "Sorry There was an error uploading your file";
                header("location: uploadimg.php");
            } 
        } else {
            $statusMsg = "Sorry Only JPG , JPEG , PNG & GIF Files are allowed to upload";
            header("location: uploadimg.php");
        } 
    } else {
        $statusMsg = "Please select a file to upload";
        header("location: uploadimg.php");
    } 
    
}


?>