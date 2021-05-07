<?php require_once 'actions/db_connect.php';


if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM offers WHERE id = {$id}";
    $result = $connect->query($sql);
    $check = "";
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc();
        $locationName = $data['locationName'];
        $price = $data['price'];
        $description = $data['description'];
        $longitude = $data['longitude'];
        $latitude = $data['latitude'];
        $picture = $data['picture'];
        $dateStart = $data['dateStart'];
        $dateEnd = $data['dateEnd'];
        $moreInfo = $data['moreInfo'];
            } else {
        header("location: error.php");
    }
    $connect->close();
} else {
    header("location: error.php");
}
?> 

<!DOCTYPE html>
<html lang="en" >
   <head>
       <meta charset="UTF-8">
        <meta name="viewport" content ="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
       <?php require_once 'components/boot.php'?> 
       <title>CodeReview12</title>
       <style>
            body {
                background-color: #d3d3d2;
            }

            .offer-info {
                background-color: #ffffff;
                width: 90%;
                margin: 0 auto;
            }

            .navbar {
                background-color: #161d26;
            }

            fieldset {
                margin: auto;
                width: 60% ;
            }       

            .card-img-top {
                margin: 0 auto;
                height: 25rem; 
                object-fit:contain;
                
            }

            .card {
                margin: 0 auto;
                border-radius: 20px;
            }


            .btn-edit {
                background-color: #2C858D;
                color: white;
            }

            .btn-edit:hover {
                background-color: #74CEB7;
                color: white;
            }

            .btn_add {
                background-color: #d3d3d2;
            }

            .btn_add:hover {
                background-color: #82c5c9;
                color: white;
            }


            #map {
                height: 30%;
                width: 90%;
                margin: 0 auto;
            }

            html, body {
                height: 100%;
                margin: 0;
                padding: 0;
            }

            .card-title {
                color:#20969d;
                text-shadow: 0.5px 0.5px 2px rgba(150, 150, 150, 1);
            }

            .price {
                color: red;
            }
          
       </style>
   </head>
   <body> 
       <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logoME.png" alt="" width="140" height="50">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                    <a href= "index.php"><button class='btn btn_add shadow mx-3'type="button">Home</button></a>
                    </li>
                    <li class='nav-item'>
                    <a href= "create.php"><button class='btn btn_add shadow'type="button">Add Offer</button></a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>


        <div class="offer-info shadow">
            <img src="<?php echo $picture ?>" class="card-img-top mt-4" alt="...">
                    <div class="card-body mt-3">
                        <h1 class="card-title fw-bolder text-center"><?php echo $locationName ?></h1>
                        <p class="card-text fs-4 text-center"><?php echo $description ?></p>
                        <p class="card-text"><?php echo $moreInfo ?></p>
                    </div>
                    <ul class="list-group text-center">
                        <p class="card-text">From <?php echo $dateStart ?> to <?php echo $dateEnd ?></p>
                        <li class="list-group-item"><h4 class="card-text price">Price: <?php echo $price ?>€ per person/day</h4></li>
                    </ul>
                    <div class="card-body d-flex justify-content-around">
                        <a href="index.php" ><button class= 'btn btn-outline-secondary' type= "button"><i class="fas fa-reply"></i> Go Back</button></a>
                        <a href="update.php?id=<?php echo $id ?>"><button class="btn-edit btn" type="button">Edit</button></a>
                        <a href="delete.php?id=<?php echo $id ?>"><button class="btn-danger btn" type="button">Delete</button></a>
                    </div>
                </div>


        <div id="map" class="shadow"></div>
       </div>
           <?php require_once 'footer.php'?>
       <script>
            var map;
            function initMap() {
                var city = {
                    lat: <?php echo $latitude ?>,
                    lng: <?php echo $longitude ?>
                };
                map = new google.maps.Map(document.getElementById("map"), {
                    center: city,
                    zoom: 8
                });
                var pinpoint = new google.maps.Marker({
                    position: city,
                    map: map
                });
            }
        </script>
      <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtjaD-saUZQ47PbxigOg25cvuO6_SuX3M&callback=initMap">
    </script>
   </body> 
</html>
