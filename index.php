<?php

include("connect.php");

// Accepting Values
$uname = $_POST['username'];
$pass = $_POST['password'];

$check = mysqli_query($connect, "select * FROM userregister WHERE username='$uname' AND password='$pass' ");

if(mysqli_num_rows($check)>0) {
    echo    '<script>
                        alert("Login Successful!");
                        window.location = "IT.html";
                    </script>';
}
else {
    echo    '<script>
                        alert("Invalid Credentials");
                        window.location = "index.html";
                    </script>';
}
?>