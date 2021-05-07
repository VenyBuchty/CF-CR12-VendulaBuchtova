<?php
// DB connection parameters
$servername = "173.212.235.205";
$username = "buchtova_VenyBuchty";
$password = "Ahojbabi2020";
$dbname = "buchtova_cats";

// Create the DB connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the DB connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}