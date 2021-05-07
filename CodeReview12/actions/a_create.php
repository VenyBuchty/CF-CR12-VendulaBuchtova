<?php
require_once 'db_connect.php';

if ($_POST) {   
   $locationName = $_POST['locationName'];
   $price = $_POST['price'];
   $description = $_POST['description'];
   $longitude = $_POST['longitude'];
   $latitude = $_POST['latitude'];
   $picture = $_POST['picture'];
   $dateStart = $_POST['dateStart'];
   $dateEnd = $_POST['dateEnd'];
   $moreInfo = $_POST['moreInfo'];
   //this function exists in the service file upload.
   $sql = "INSERT INTO offers (locationName, price, description, longitude, latitude, dateStart, dateEnd, picture, moreInfo) VALUES ('$locationName', '$price', '$description', '$longitude', '$latitude', '$dateStart', '$dateEnd', '$picture', '$moreInfo')";

   if ($connect->query($sql) === true ) {
       $class = "success";
       $message = "Location " . $locationName . " for " . $price . " was successfully created!";
   } else {
       $class = "danger";
       $message = "Error while creating record. Try again: <br>" . $connect->error;
   }
   $connect->close();
} else {
   header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang= "en">
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
       <title>Insert Location</title> 
       <?php require_once '../components/boot.php' ?>
       <style>
            body {
                background-color: #d3d3d2;
            }

            .btn-edit {
                background-color: #2C858D;
                color: white;
            }

            .btn-edit:hover {
                background-color: #FFFFCB;
                color: black;
            }

            .alert {
               margin: 0 auto;
               border-radius: 20px;
           }

            .navbar {
                background-color: #161d26;
            }

            .btn_add {
                background-color: #d3d3d2;
            }

            .btn_add:hover {
                background-color: #82c5c9;
                color: white;
            }
        </style>
   </head>
   <body>
<head>
        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="../img/logoME.png" alt="" width="140" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                    <a href= "../index.php"><button class='btn btn_add shadow mx-3'type="button">Home</button></a>
                    </li>
                    <li class='nav-item'>
                    <a href= "../create.php"><button class='btn btn_add shadow'type="button">Add Offer</button></a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
       <div  class="container">
            <div class="text-center alert alert-<?=$class;?>" role="alert">
               <p class="text-center fs-2"><?php echo ($message) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-edit" type='button'>Home</button></a>
           </div >
       </div>
   </body>
</html>