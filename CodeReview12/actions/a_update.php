<?php
require_once 'db_connect.php';

if ($_POST) {
    $id = $_POST['id'];
    $locationName = $_POST['locationName'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $picture = $_POST['picture'];
    $dateStart = $_POST['dateStart'];
    $dateEnd = $_POST['dateEnd'];
    $moreInfo = $_POST['moreInfo'];

    $sql = "UPDATE offers SET locationName = '$locationName', price ='$price', description = '$description', longitude = '$longitude', latitude = '$latitude', picture = '$picture', dateStart = '$dateStart', dateEnd = '$dateEnd', moreInfo = '$moreInfo' WHERE id = {$id}";
    }    
    if ($connect->query($sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . $connect->error;
    }
    $connect->close();    
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <title>Update Media</title>
        <?php require_once '../components/boot.php'?> 
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
        <div class="container">
            <div class="text-center alert alert-<?php echo $class;?>" role="alert">
                <p class="text-center fs-2"><?php echo ($message) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-outline-secondary" type='button'><i class="fas fa-reply"></i> Go Back</button></a>
                <a href='../index.php'><button class="btn btn-edit" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>