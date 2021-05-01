<?php
session_start();

require_once '../components/db_connect.php' ;

if (isset($_SESSION['user']) != "" ) {
   header("Location: ../home.php");
   exit;
}

if (!isset($_SESSION['adm' ]) && !isset($_SESSION['user'])) {
   header("Location: ../login.php" );
    exit;
}



$result = mysqli_query($connect, "SELECT * FROM animals");

?> 
<!DOCTYPE html> 
<html lang="en">
<head>
   <meta charset="UTF-8"> 
    <meta name="viewport"   content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
   <?php require_once '../components/boot.php' ?>
   <title>Pet-shop |  Add Animal</title >
   <style> 
        body {
            background: rgb(140,150,118);
            background: radial-gradient(circle, rgba(140,150,118,0.927608543417367) 39%, rgba(125,121,121,0.8267682072829132) 74%);
        }
    
        .card {
            border-radius: 20px;
        }

        .navbar {
            background-color: #232428; 
        }   

        form {
            margin: auto;
            width: 60% ;
        }

        legend {
            padding: 1rem;
        }

        .btn-success,
        .btn-warning {
            transition: all .2s ease-in-out;

        }

        .btn-success:hover,
        .btn-warning:hover {
            transform: scale(1.1);
        }
   </style>
</head>
<body>
<nav class="navbar navbar-expand navbar-dark mb-3 sticky-top shadow">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="../home.php">Our animals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Animals List</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="../dashboard.php">Users List</a>
        </li>
    </div>
  </div>
</nav>
<div class ="container">
<div class="card shadow">
  <legend class='h2 text-center'>Add Animal</legend>
  <form action="actions/a_create.php"  method= "post" enctype= "multipart/form-data">
  <table  class='table'>
          <tr>
              <th>Breed</th> 
              <td><input  class='form-control' type ="text" name="breed"   placeholder="Animal breed" /></td>
          </tr>    
          <tr>
              <th>Name</th>
              <td><input class='form-control'  type="text"  step="any" name ="name" placeholder= "Animal name" /></td> 
          </tr> 
          <tr> 
              <th>Picture</th> 
              <td><input class= 'form-control' type= "file" name="image"/></td>
          </tr>
          <tr>
              <th>Descripiton</th> 
              <td><input  class='form-control' type ="text" name="descripiton"   placeholder="Animal description" /></td>
          </tr> 
          <tr>
              <th>Location</th> 
              <td><input  class='form-control' type ="text" name="location"   placeholder="Animal located at" /></td>
          </tr> 
          <tr>
              <th>Hobbies</th> 
              <td><input  class='form-control' type ="text" name="hobbies"   placeholder="Animal hobbies" /></td>
          </tr>
          <tr>
              <th>Age</th> 
              <td><input  class='form-control' type ="number" name="age"   placeholder="Animal age" /></td>
          </tr>  
          <tr>
              <th>Size</th> 
              <td>
                                <select class="form-select" name="size" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="small">small</option>
                                    <option value="large">large</option>
                                </select>
                            </td>
          </tr> 
      </table > 
      <div class="card-body d-flex justify-content-center">
              <td ><button class = 'btn btn-success mx-2' type = "submit"><i class="fas fa-upload"></i> Insert Animal </button ></td > 
              <td ><a href = "index.php" ><button   class = 'btn btn-warning'   type = "button" ><i class="fas fa-home"></i> Home </button></a></td> 
        </div>
  </form > 
</div>
</div > 
</body > 
</html >