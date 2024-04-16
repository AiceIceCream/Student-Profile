<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentInfoTrack</title>
    <link rel="website icon" type="png" href="assets/images/student.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

  <section class="vh-auto" style="background-image: linear-gradient(to bottom, #48bbe3, #42b3cf, #42aabc, #46a1a9, #4b9797);">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px; margin: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-3 mx-1 mx-md-4 mt-4" style="font-family: Serif, Garamond">Sign up</p>

                <form class="mx-1 mx-md-4" action="process.php" method="POST" autocomplete="off">

                  <div class="d-flex flex-row align-items-center mb-1">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example3c">Email</label>
                      <input type="email" id="form3Example3c" class="form-control" name="email" />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-1">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4cd">First Name</label>
                      <input type="text" id="form3Example4cd" class="form-control" name="firstname" />
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-1">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4cd">Last Name</label>
                      <input type="text" id="form3Example4cd" class="form-control" name="lastname" />
                    </div>
                  </div>
                  
                  <div class="d-flex flex-row align-items-center mb-1">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <label class="form-label" for="form3Example4cd">Classification</label>
                            <select name="class" id="class"  class="form-control">
                                    <option value="Student" class="form-control">Student</option>
                                    <option value="Instructor" class="form-control">Instructor</option>
                            </select>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-1">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-1">
                          <label class="form-label" for="form3Example4c">Password</label>
                          <div class="input-group">
                              <input type="password" id="form3Example4c" class="form-control" name="password" />
                              <button class="btn btn-outline" type="button" id="passwordToggle">
                                <i><img src="assets/images/close.png"></i>
                              </button>
                          </div>
                      </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-0" style="margin-top: 10px;">
                    <button type="submit" class="btn btn-primary btn-lg" name="registerButton">Register</button>
                  </div>

                  <div class="text-center text-lg-start mt-0 pt-2 d-flex justify-content-center">
                    <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php"
                        class="link-safe">Login</a></p>
                 </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                <img src="assets/images/student.png"
                  class="img-fluid" alt="Sample image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    document.getElementById("passwordToggle").addEventListener("click", function() {
        var passwordInput = document.getElementById("form3Example4c");
        var passwordToggle = document.getElementById("passwordToggle");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggle.innerHTML = '<i><img src="assets/images/open.png"></i>';
        } else {
            passwordInput.type = "password";
            passwordToggle.innerHTML = '<i><img src="assets/images/close.png"></i>';
        }
    });
</script>
<?php
if (isset($_SESSION['status']) && $_SESSION['status_code'] != '' )
{
  ?>
      <script>
          swal({
              title: "<?php echo $_SESSION['status']; ?>",
              text: "<?php echo isset($_SESSION['sub_status']) ? $_SESSION['sub_status'] : ''; ?>",
              icon: "<?php echo $_SESSION['status_code']; ?>",
          });
      </script> 
      <?php
      unset($_SESSION['status']);
      unset($_SESSION['status_code']);
      unset($_SESSION['sub_status']);
}
?>

</body>
</html>