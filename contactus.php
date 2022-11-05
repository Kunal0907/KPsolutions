<?php
    include("connect.php");

    // Accepting values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $msg = $_POST['msg'];




        // $insert = mysqli_query($connect, "INSERT INTO registration (name, mobile, username, email, password) VALUES('$name', '$mobile', '$username', '$email', '$password')");
        $insert = mysqli_query($connect, "INSERT INTO contactus (name, email, phone,msg) VALUES('$name','$email', '$phone', '$msg')");

        if($insert) {
            echo    '<script>
                        alert("Message Sent Successful!");
                        window.location = "IT.html";
                    </script>';
        }   
        else {
            
            echo    '<script>
                        alert("Some error occurs");
                        window.location = "contactus.html";
                    </script>';
        } 
?>
