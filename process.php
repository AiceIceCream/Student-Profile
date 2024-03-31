<?php
include("config.php");

if(isset($_POST['registerButton'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    if (strpos($email, "@ustp.edu.ph") === false) {
        echo "Invalid email! Please use the USTP email.";

        // header("Location: index.php");
        // exit();
    } else {
        $register_query = "INSERT INTO `users`(`fullName`, `userName`, `password`, `contact`, `email`) VALUES ('$fullname', '$username', '$password', '$contact', '$email')";
    
        $register_query_run = mysqli_query($conn, $register_query);
    
        if($register_query_run){
            echo "Registered Successfully";
        } else {
            echo "Error!";
        }
    }
}



?>
