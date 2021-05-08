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

            .navbar {
                background-color: #161d26;
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

            .btn-create {
                background-color: #20969d;
            }

            .btn-create:hover {
                background-color: #a7d1d3;
            }

           fieldset {
               margin: auto;
               width: 80% ;
           }       

           .card {
               margin: 0 auto;
               
           }

            @media only screen and (max-width: 767px) {
                fieldset {
               width: 100% ;
                }  

                .form-control {
                  width: 10rem;
                }
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
           <div class="card shadow my-4">
           <fieldset>
           <legend class='h2 text-center my-4'>Add Location</legend>
           <form action="actions/a_create.php"  method= "post" enctype= "multipart/form-data">
               <table  class='table'>
                   <tr>
                       <th>Location: </th> 
                        <td><input  class ='form-control' type="text"  name="locationName"  placeholder ="name of location" /></td>
                   </tr>    
                   <tr>
                       <th>Price: </th >
                       <td><input class= 'form-control' type="number"  name="price" placeholder ="€ per person/day" step="any" /></td>
                   </tr>
                   <tr>
                       <th>Description: </th >
                       <td><input class= 'form-control' type="text"  name="description" placeholder ="short description"/></td>
                   </tr>
                   <tr>
                       <th>More details: </th >
                       <td><input class= 'form-control' type="text"  name="moreInfo" placeholder ="more information"/></td>
                   </tr>
                    <tr>
                       <th>Longitude: </th >
                       <td><input class= 'form-control' type="text"  name="longitude" placeholder ="longitude number"/></td>
                   </tr>
                    <tr>
                       <th>Latitude: </th >
                       <td><input class= 'form-control' type="text"  name="latitude" placeholder ="latitude number"/></td>
                   </tr>
                   <tr>
                       <th>Date of Start: </th >
                       <td><input class= 'form-control' type="date"  name="dateStart" /></td>
                   </tr>
                    <tr>
                       <th>Date of End: </th >
                       <td><input class= 'form-control' type="date"  name="dateEnd" /></td>
                   </tr>
                   <tr>
                       <th>Picture: </th >
                       <td><input class= 'form-control' type="text"  name="picture" placeholder ="image url"/></td>
                   </tr>
                </table> 
                <div class="d-flex justify-content-center mb-4">
                            <button class ='btn btn-create mx-2' type="submit">Insert Location</button>
                        <a href="index.php" ><button class= 'btn btn-outline-secondary' type= "button"><i class="fas fa-reply"></i> Go Back</button></a>
                </div>
                </div>
            </form>
            </fieldset>
            </div>

   </body> 
</html>