<?php session_start();
include ("config.php");
require 'config.php';


if(isset($_POST["insert"])){

    $fullName = $_POST['fullName'];
    $studentId = $_POST['studentId'];
    $course = $_POST['course'];
    $email = $_POST['email'];

        if($_FILES["image"]["error"] === 4){
            echo
            "<script> alert('Image does not exist'); </script>"
            ;
        }
        else{
            $filename = $_FILES["image"]["name"];
            $filesize = $_FILES["image"]["size"];
            $tmpname = $_FILES["image"]["tmp_name"];
    
            $validImageExtension = ['jpg', 'jpeg', 'png'];
            $imageExtension = explode('.', $filename);
            $imageExtension =strtolower(end($imageExtension));
            if(!in_array($imageExtension, $validImageExtension)){
                echo
                "<script> alert('Invalid image extension'); </script>"
                ;
            }
            else if($filesize > 1000000){
                echo
                "<script> alert('Image size is too large'); </script>"
                ;
            }
            else{
                $newImageName = uniqid();
                $newImageName .= '.' . $imageExtension;
                
                move_uploaded_file($tmpname, 'assets/images/' . $newImageName);
                $query = "INSERT INTO `records`(`studentId`, `fullName`, `email`, `course`, `image`) VALUES ('$studentId','$fullName','$email','$course','$newImageName')";
                
                
            $query_result = mysqli_query( $con, $query );

            if($query_result){
                $_SESSION['status'] = "Student Added!";
                $_SESSION['status_code'] = "success";
                header("Location: students.php");
                exit();
            }
            else{
                header("Location: students.php");
            }
        }
                
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentInfoTrack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="website icon" type="png" href="assets/images/student.png">
</head>
<body>

<h1 class="text-center" style="margin-top: 150px">Add Student</h1>
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-9" >
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="studentName" class="form-label">Student Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="studentId" class="form-label">Student ID</label>
                        <input type="text" class="form-control" id="studentId" name="studentId">
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="course" class="form-label">Course</label>
                            <select name="course" id="cars"  class="form-control">
                                <optgroup label="CITC" class="form-control">
                                    <option value="BSIT" class="form-control">BSIT</option>
                                    <option value="BSTCM" class="form-control">BSTCM</option>
                                    <option value="BSDS" class="form-control">BSDS</option>
                                    <option value="BSCS" class="form-control">BSCS</option>
                                </optgroup>
                            </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>

                    <div class="col-md-3 mb-6">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value="">
                    </div>

                    <div class="col-md-12 mb-3 text-center">
                        <a type="button" style="float: right; margin-left: 10px;" class="btn btn-success" href="students.php">Cancel</a>
                        <button type="submit" class="btn btn-primary" name="insert" style="float: right;">Add Student</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>


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
