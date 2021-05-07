<?php
    require_once 'RESTful.php';
    $url = 'http://buchtova.codefactory.live/webservice.php';
    $result = curl_get($url);
    $catsJ = json_decode($result, true); //it turns the json into an object
    $cats = $catsJ['cats'];
    $tbody ="";
    foreach ($cats as $data) {
        $tbody .="
            <div class='m-2 card text-center text-white bg-primary' style='width: 18rem; font-size: 1.2rem'>
                <img src='".$data['image']."' class='card-img-top img-thumbnail'>
                <p class='card-title'>".$data['breed']."</p>
                <div class='card-body'>
                    <p class='card-text'>Price: ".$data['price']."</p>
                </div>
            </div>
        ";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CHALLENGE API</title>
        <style>
            .cards {
                margin-top: 5%;
                background-color: lightblue;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <div class="container cards">
            <div class="row">
                <p><?php var_dump($catsJ); ?></p>
            </div>
            <div class="row justify-content-center cards">
                <?=$tbody;?>
            </div>
        </div>
    </body>
</html>