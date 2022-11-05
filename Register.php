<?php
    // including database connectivity php page
    include("connect.php");

    // Accepting value
    $name = $_POST['name'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    // insert data into database
    $insert = mysqli_query($connect, "INSERT INTO userregister (name, username, password) VALUES('$name', '$uname', '$pass')");

    if($insert) {
        echo    '<script>
                    alert("Registered Successful!");
                    window.location = "index.html";
                </script>';
    }   
    else {
        
        echo    '<script>
                    alert("Some error occurs");
                    window.location = "index.html";
                </script>';
    } 
?>