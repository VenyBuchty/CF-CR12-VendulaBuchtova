<?php 

require_once 'actions/db_connect.php';
require_once 'RESTful.php';


$url = 'http://api.serri.codefactory.live/random/';
$joke = curl_get($url);
$parsing = json_decode($joke);


$sql = "SELECT * FROM offers";
$result = mysqli_query($connect ,$sql);
$card=''; //this variable will hold the body for the table
if(mysqli_num_rows($result)  > 0) {     
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
       $card .= '<div class="col">
                        <div class="card shadow offers">
                            <img src="'. $row["picture"] . '" class="card-img-top my-3" alt="...">
                            <div class="card-body">
                                <h2 class="card-title fw-bolder text-center">'. $row["locationName"]. '</h2>
                                <p class="card-text fw-bold">'. $row["description"] .'</p>
                                <h5 class="card-text text-center price">Price: '. $row["price"] .'€ per person/day</h5>
                                </div><hr>
                
                                <div class="d-flex justify-content-center mb-2">
                                    <a href="learnMore.php?id=' .$row["id"].'"><button class="btn btn_show" type="button">Learn more</button></a>
                                </div>
                        </div>
                </div>';
                };
    } else {
        $card =  '<div class="col">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">No Data Available</p>
                        </div>
                    </div>
                </div>';
    }

    $connect->close();

?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
        <title>CodeReview12</title>
        <?php require_once 'components/boot.php'?>
        <style type="text/css">
            body {
                background-color: #d3d3d2;
            }

            .navbar {
                background-color: #161d26;
            }

            .hero {
                border-radius: 0px 0px 20px 20px;
                background-color:white;
            }


            .card-img-top {
                margin: 0 auto;
                height: 15rem; 
                object-fit:cover;
                
            }

            .card {
                border-radius: 20px;
            }

            .offers {
                min-height: 33rem;
            }

            .btn_add {
                background-color: #d3d3d2;
            }

            .btn_add:hover, .btn_show:hover {
                background-color: #82c5c9;
                color: white;
            }

            .btn_show {
                background-color: #4e6978;
                color: white;
            }

            .joke {
                color: #4e6978;
            }

            .price {
                color: red;
            }

            span, .card-title {
                color:#20969d;
                text-shadow: 0.5px 0.5px 2px rgba(150, 150, 150, 1);
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
    <div class="container">
        <div class="text-center p-4 shadow hero mb-5">
                <h1>Be welcome in our Travel Agency</h1>
                <h5> <span>Mount Everest Travel Agency</span>, based in Vienna Austria, has been your reliable tour operator for more than 20 years. <br> Specialized in tailor made group tours to <span>Europe</span>, we offer high quality services including hotels, restaurants, bus services, guided tours and other sightseeing programs suitable for youth groups, alumni, music groups or sports teams!</h5>
                <hr>
                <h5>Some joke that will instantly make your day better: </h5>
                <h5><i class="fas fa-chevron-down"></i></h5>
                <h6 class="fst-italic joke">
                   <?php
                    echo $parsing->joke;
                    ?>
        </div>
        
        <div class="container">
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?= $card;?>
            </div>    
        </div>
    </div> 
    <?php require_once 'footer.php'?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script>

 /*       document.getElementById("myButt").addEventListener("click", getJoke, false); //create an eventlistener to call getUsers() function when button clicked

        function getJoke() {
           const request = new XMLHttpRequest(); //create new request
           request.open("GET", "https://cors-anywhere.herokuapp.com/http://api.serri.codefactory.live/random/"); //set request as a GET method connecting to users.php 
           request.onload = function () {
                if (this.status == 200) {
                    let joke = JSON.parse(this.responseText); //data received is turned into JS objects
                   console .log(joke) //see the array of objects in your console
                    let output = ''; //create container variable 
                   // users.forEach(user => { 
                   for ( let i in joke) {
                       output += joke[i]; //loop through each object and display their properties 
                   }
                   document .getElementById( 'jokes' ).innerHTML = output; //output results in div#users
                    // });
               }
           }
           request.send(); //send request
       } */
    </script>
    </body>
</html>