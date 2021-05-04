<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
                require_once 'RESTful.php';
                $cities = array("37.8267,-122.4233", "42.3601,-71.0589", "48.20849,16.37208");
                foreach ($cities as $city) {
                    $url = 'http://api.serri.codefactory.live/random/';
                    $result = curl_get($url);
                    echo "
                    <div class='card text-center text-white bg-primary' style='width: 18rem; font-size: 1.2rem'>
                        <p class='card-title'>Joke for you</p>
                        <div class='card-body'>
                            <p class='card-text'> {$url} </p>
                        </div>
                    </div>";
                }
                ?>
        </div>
    </div>
</body>

</html>

