<?php
    include("connect.php");

    // Accepting values
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $jobs = $_POST['jobs'];
    $file = $_POST['file'];

    $targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf','docx');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert =("INSERT into uploads (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;

    if($password==$cpassword)
    {
        $insert = mysqli_query($connect, "INSERT INTO uploads (name, mobile, username, email, password, jobs, file) VALUES('$name', '$mobile', '$username', '$email', '$password','$jobs','$file')");



        if($insert) 
        {
            echo    '<script>
                        alert("Registration Successful!");
                        window.location = "IT.html";
                    </script>';
        }   
        else 
        {
            
            echo    '<script>
                        alert("Some error occurs");
                        window.location = "Registration.html";
                    </script>';
        } 
    }
    
    else
    {
        echo    '<script>
                    alert("Password and comfirm password does not match");
                    window.location = "Registration.html";
                </script>';
    }

?>
