<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
      <div class="col-lg-12 col-md-6">
          <form action="process.php" method="POST">

              <label>Username</label>
              <input type="text" name="username" class="form-control">

              <label>Fullname</label>
              <input type="text" name="fullname" class="form-control">

              <label>Password</label>
              <input type="password" name="password" class="form-control">

              <label>Contact Number</label>
              <input type="int" name="contact" class="form-control">

              <label>Email</label>
              <input type="email" name="email" class="form-control">

              <button class="mt-2" type="submit" name="registerButton">Register</button>

          </form>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>