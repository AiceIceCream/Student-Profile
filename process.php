<?php
session_start();    
include("config.php");

//For Updating A Task

if(isset($_POST["update"])){

    $id = $_POST['id'];
    $new_title = $_POST['new_title'];
    $new_description = $_POST['new_description'];
    $new_priority = $_POST['new_priority'];
    $new_due = $_POST['new_due'];

    if($new_title == ''){
        $_SESSION['status'] = "Title cannot be empty";
        $_SESSION['status_code'] = "error";
        header("Location: edit_task.php");
        exit();
    }

    if($new_due == ''){
        $_SESSION['status'] = "Due date cannot be empty";
        $_SESSION['status_code'] = "error";
        header("Location: edit_task.php");
        exit();
    }

    $query = "UPDATE `tasks` SET `title`='$new_title',`description`='$new_description',`priority`='$new_priority',`due_date`='$new_due' WHERE `id` = '$id'";

    $query_result = mysqli_query( $con, $query );

    if($query_result){
        $_SESSION['status'] = "Task Updated Successfully!";
        $_SESSION['status_code'] = "success";
        header("Location: index.php");
        exit();
    }
}

//For Deleting A Task

if(isset($_POST["delete"])){
    
    $id = $_POST['id'];

    $query = "DELETE FROM `tasks` WHERE `id` = '$id'";

    $query_result = mysqli_query( $con, $query );

    if($query_result){
        $_SESSION['status'] = "Task Deleted Successfully!";
        $_SESSION['status_code'] = "success";
        header("Location: index.php");
        exit();
        }

}


//For Registering an Account

if(isset($_POST["registerButton"])){

    $email = $_POST['email'];
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $class = $_POST['class'];
    $password = $_POST['password'];

    $check_email_query = "SELECT * FROM `account` WHERE `email` = '$email'";
    $email_result = mysqli_query($con, $check_email_query);
    $email_count = mysqli_num_rows($email_result);

    if($email_count > 0){
        $_SESSION['status'] = "Email address already taken";
        $_SESSION['status_code'] = "error";
        header("Location: register.php");
        exit();
    }

    if (empty($firstName) || empty($lastName) || empty($password) || empty($email)) {
        $_SESSION['status'] = "Please Input Required Field";
        $_SESSION['status_code'] = "error";
        header("Location: register.php");
        exit();
    }
    
    if (strlen($password) < 6) {
        $_SESSION['status'] = "Password must be at least 6 characters long";
        $_SESSION['status_code'] = "error";
        header("Location: register.php");
        exit();
    }

    if (strpos($email, "@ustp.edu.ph") === false) {
        $_SESSION['status'] = "Email not associated with USTP!";
        $_SESSION['status_code'] = "error";
        header("Location: register.php");
        exit();
    }

    $query = "INSERT INTO `account`(`email`, `firstname`, `lastname`, `class`, `password`) VALUES ('$email','$firstName','$lastName','$class','$password')";

    $query_result = mysqli_query($con, $query);

    if($query_result){
        $_SESSION['status'] = "Registration Success!";
        $_SESSION['sub_status'] = "You May now Login";
        $_SESSION['status_code'] = "success";
        header("Location: login.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

//For Loggin in an Account

if(isset($_POST["loginButton"])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `account` WHERE `email` = '$email' AND `password` = '$password'";
    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) == 1) {
        $_SESSION['status'] = "Login Successfully";
        $_SESSION['sub_status'] = "Welcome User";
        $_SESSION['status_code'] = "success";

        $user = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $user;

        if($user['class'] == "Student") {
            header("Location: studentEnd.php");
        } elseif($user['class'] == "Instructor") {
            header("Location: instructorEnd.php");
        }
        exit();
    } else {
        $_SESSION['status'] = "Invalid email or password";
        $_SESSION['status_code'] = "error";
        header("Location: login.php"); 
        exit();
    }
}

?>