<?php session_start();
include ("config.php");
require 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentInfoTrack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles2.css">
    <link rel="website icon" type="png" href="assets/images/student.png">
    <style>
        .signout{
            height: 40px;
            width: 100px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease-in-out;
        }
        
        .type1::after {
            font-size: 15px;
            content: "Sign out";
            height: 40;
            width: 100px;
            background-color: #008080;
            color: #fff;
            transform: translateY(50px);
            font-weight: 500;
            align-items: center;
            justify-content: center;
            transition: all 0.5s ease-in-out;
        }
        
        .type1::before {
            font-size: 15px;
            content: "<?php echo $_SESSION['user']['firstname'];?>";
            height: 40px;
            width: 100px;
            background-color: #ff5252;
            color: #ffff;
            left: 0%;
            transform: translateY(0px) scale(1.2);
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.5s ease-in-out;
        }
        
        .type1:hover::after {
            transform: translateY(0) scale(1.2);
        }
        
        .type1:hover::before {
            transform: translateY(-50px) scale(0) rotate(120deg);
        }
    </style>
</head>
<body>
    <div id="first">

        <header class="col-lg-12 col-md-6">
            <nav class="navbar" class="col-lg-12 col-md-6">
            <a href="instructorEnd.php" class=""><button class="btn-header">Home</button></a>
            <a href="about3.php" onclick=""><button class="btn-header">About Us</button></a>
            <a href="contact3.php" onclick=""><button class="btn-header">Contact Us</button></a>
            </nav>
            <a href="index.php"><button class="signout type1"></button></a>
        </header>
        
        <div id="welcome-text" class="col-lg-12 col-md-6">
            <image src="assets/images/student.png">
            <p style="font-size: 20px ; font-family: Gochi Hand, cursive; color: white">Struggling on how to manage your student list? Worry no more,<br/> StudentInfoTrack is here, a cross platform system organizing your list with no hassle.</p>
        </div>

        <div id="button-container">
            <a href="#"><button class="btn-file"><span>IT3R4<span></button></a>
            <a href="students.php"><button class="btn-file"><span>IT3R6<span></button></a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
      
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if (isset($_SESSION['status']) && $_SESSION['status_code'] != '' )
{
    ?>
        <script>
            swal({
                title: "<?php echo $_SESSION['status']; ?>",
                icon: "<?php echo $_SESSION['status_code']; ?>",
            });
        </script> 
        <?php
        unset($_SESSION['status']);
        unset($_SESSION['status_code']);
}
?>

</body>
</html>