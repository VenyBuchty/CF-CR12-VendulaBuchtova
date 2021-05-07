
<?php 
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM offers WHERE id = {$id}" ;
    $result = $connect->query($sql);
    $data = $result->fetch_assoc();
    if ($result->num_rows == 1) {
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
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
        <title>Delete Media</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            body {
                background-color: #d3d3d2;
            }

            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 70% ;
            }     
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }    

            .card {
                margin: 0 auto;
                width: 40rem;
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
        <fieldset>
            <div class="card p-5">
            <h5>You have selected the media below:</h5>
            <table class="table w-75 mt-3">
                <tr>
                    <td><?php echo $locationName . " for " . $price?>€ per person/day</td>
                </tr>
            </table>

            <h3 class="mb-4">Do you really want to delete this media?</h3>
            <form action ="actions/a_delete.php" method="post" class="d-flex justify-content-around">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <button class="btn btn-danger" type="submit">Yes, delete it!</button>
                <a href="index.php" ><button class= 'btn btn-outline-secondary' type= "button"><i class="fas fa-reply"></i> No, Go Back</button></a>
            </form> 
            </div>
        </fieldset>

    </body>
</html>