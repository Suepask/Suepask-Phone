<?php 
    include('dbconfig.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload img</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>
<body>
    
    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <div class="text-center justify-content-center align-item-center p-4 border-2 border-dashed rounded-3">
                        <h6 class="my-2">Select image file to upload</h6>
                        <input type="file" name="file" class="form-control streched-link" accept="image/gif, image/jpeg, image/png" id="">
                        <p class="small mb-0 mt-2"><b>Note:</b> Only JPG , JPEG , PNG & GIF File allowed to upload</p>
                    </div>
                    <div class="d-sm-flex justify-content-end mt-2">
                        <input type="submit" name="submit" value="Upload" class="btn btn-sm btn-primary mb-3">
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <?php 
                if(!empty($statusMsg)) { ?>
                    <div class="alert alert-secondary" role="alert">
                        <?php echo $statusMsg; ?>
                    </div>
               <?php } ?>
               <div>
                <div class="row g-2">
                    <?php 
                        $query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC" );
                        if($query->num_rows > 0 ) {
                            while($row = $query->fetch_assoc()) {
                                $imageURL = 'uploads/'.$row['file_name'];
                                ?>
                                <div class="col-sm-6 col-lg-4 col-xl-3">
                                    <div class="card shadow h-100">
                                        <div class="product-item">
                                            <div class="product-img">
                                                <a href="item1.php"><img src="<?php echo $imageURL ?>" alt="" width="100%" class="card-img"></a>
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
        </div>
    </div>

</body>
</html>