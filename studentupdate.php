<?php session_start();
include("config.php");
require 'config.php';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentInfoTrack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="website icon" type="png" href="assets/images/student.png">
</head>

<body>

    <h1 class="text-center" style="margin-top: 150px">Update Student</h1>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-9">

                <?php
                if (isset($_GET['id'])) 
                {
                    $id = $_GET['id'];
                    $records_query = "SELECT * FROM `records` WHERE `id` = '$id'";
                    $records_run = mysqli_query($con, $records_query);

                    if (mysqli_num_rows($records_run) > 0) {
                        foreach($records_run as $record){

                ?>

                        <form action="process.php" method="POST">
                        <input type="hidden" name="id" value="<?=$record['id'];?>">

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="studentName" class="form-label">Student Name</label>
                                    <input type="text" class="form-control" id="fullName" name="fullName" value="<?= $record['fullName']; ?>">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label for="studentId" class="form-label">Student ID</label>
                                    <input type="text" class="form-control" id="studentId" name="studentId" value="<?= $record['studentId']; ?>">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="course" class="form-label">Course</label>
                                    <select name="course" id="course" class="form-control">
                                        <optgroup label="CITC" class="form-control">
                                            <option value="BSIT">BSIT</option>
                                            <option value="BSTCM">BSTCM</option>
                                            <option value="BSDS">BSDS</option>
                                            <option value="BSCS">BSCS</option>
                                        </optgroup>
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $record['email']; ?>">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="text" class="form-control" id="image" name="image" value="<?= $record['image']; ?>" readonly>
                                </div>

                                <div class="col-md-12 mb-3 text-center">
                                    <a type="button" style="float: right; margin-left: 10px;" class="btn btn-success" href="students.php">Cancel</a>
                                    <button type="submit" class="btn btn-primary" name="update" style="float: right;">Update</button>
                                </div>
                            </div>
                        </form>

        </div>
    </div>
<?php
                }
                    } else {
?>
                    <h4>No Record Found!</h4>
                <?php
                    }
                }
                ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
if (isset($_SESSION['status']) && $_SESSION['status_code'] != '') {
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