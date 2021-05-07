<?php
    // Require conn.php (DB connection) file
    require_once("conn.php");

    // query all data fro db
    $sql = "SELECT * FROM cat";
    $result = mysqli_query($conn, $sql);

    // put all results in the rows array
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Close the DB connection
    mysqli_close($conn);
?>