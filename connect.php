<?php

    // Connecting to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "online job portal";

    // Create a Connection
    $connect = mysqli_connect($servername, $username, $password, $database);

    // Check Connection
    // if(!$connect){
        // die("Connection Failed: " . mysqli_connect_error());
    // }
    // else{
    //     echo "Connection Successful";
    // }

?>