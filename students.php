<?php session_start();
include ("config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">  
  </head>

  <style>
    body{
      background-image: linear-gradient(to bottom, #48bbe3, #42b3cf, #42aabc, #46a1a9, #4b9797);
      background-size: cover;
      margin: 0;
      padding: 0;
    }

    .card-title{
      text-align: center;
    }
    header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        header .navbar {
            display: flex;
        }

        header .navbar a {
            color: black;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
            font-family: tahoma;
        }

        header .navbar a:hover {
            color: gray;
        }

        .container{
            margin-top: 80px;
        }

        .expanded-image {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 9999;
        }
        
        .expanded-image img {
            display: block;
            margin: auto;
            max-width: 90%;
            max-height: 80%;
            margin-top: 5%;
            border-radius: 20px;
        }

        .btn-header {
            display: inline-block;
            padding: 10px 20px;
            font-size: 10px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #ff5252;
            border: 2px solid #000;
            border-radius: 10px;
            box-shadow: 5px 5px 0px #fff;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-header:active {
            background-color: #fcf414;
            box-shadow: none;
            transform: translateY(4px);
        }

        .btn-header:hover {
            background-color: #fff;
            color: #ff5252;
            border: 2px solid #ff5252;
            box-shadow: 5px 5px 0px #ff5252;
        }

        .container-btns {
            position: absolute;
            margin-right: -50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .more-btn {
            display: none;
        }

        .more-btn-label {
            display: inline-block;
            cursor: pointer;
        }

        .more-dot {
            background-color: #aab8c2;
            margin: 0 auto;
            display: inline-block;
            width: 7px;
            height: 7px;
            margin-right: 1px;
            border-radius: 50%;
            transition: background-color 0.3s;
        }

        .more-menu {
            display: none;
            position: absolute;
            top: calc(100% + 5px);
            left: 0;
            z-index: 1000;
            background-color: #fff;
            border-radius: 4px;
            background-color: #fff;
            border: 1px solid #ccd8e0;
            border-radius: 4px;
            box-shadow: 1px 1px 3px rgba(0,0,0,0.25);
        }

        .more-menu-items {
            margin: 0;
            list-style: none;
            padding: 0;
        }

        .more-menu-item {
            display: block;
        }

        .more-menu-item:hover {
            background-color: #489fe5;
        }

        .more-menu-btn {
          background: none;
          border: 0 none;
          line-height: normal;
          overflow: visible;
          -webkit-user-select: none;
          -moz-user-select: none;
          -ms-user-select: none;
          width: 100%;
          text-align: left;
          outline: none;
          cursor: pointer;
          font-family: "Gochi Hand";
        }

        .more-btn:checked + .more-btn-label + .more-menu {
            display: block;
        }
  </style>
  <body>
  <header class="col-lg-12 col-md-6">
            <nav class="navbar" class="col-lg-12 col-md-6">
            <a href="index.php" class=""><button class="btn-header">Home</button></a>
            <a href="#" onclick=""><button class="btn-header">About Us</button></a>
            <a href="#" onclick=""><button class="btn-header">Contact Us</button></a>
            </nav>
  </header>

 <div class="container">
 <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h2 class="card-title">IT3R6 Students List</h5>

              <a href="studentreg.php" style="float: right;" class="btn btn-primary">Add a new Student</a>
              <!-- Table with stripped rows -->
  
  <!-- E line ug tarong ang row parehas sa pag linya sa pag kuha sa data sa database -->

              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Student Image</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">Student Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Course</th>
                  </tr>
                </thead>
                <tbody>

  <!-- Kuhaon ang data gikan sa database under sa tasks column -->

                <?php
                $menuCounter = 0;
                $query = "SELECT * FROM `records`";
                $query_run = mysqli_query($con, $query);
                if(mysqli_num_rows($query_run) > 0)
                {
                  foreach($query_run as $row)
                {
                ?> 

  
  <!-- E han ay kada row ang data same sa pag set sa th -->

                <tr>
                  <td style="text-align: center; width: 150px; height: 150px;">
                      <img src="assets/images/<?= $row['image']; ?>" alt="Student Image" style="max-width: 100%; max-height: 100%; border-radius: 20%; cursor: pointer;" onclick="expandImage(this.src)">
                  </td>
                  <td><?= $row['studentId']; ?></td>
                  <td><?= $row['fullName']; ?></td>
                  <td><?= $row['email']; ?></td>
                  <td><?= $row['course']; ?></td>

                  <td class="text-center">
                    <div class="container-btns">
                        <div class="more">
                            <input type="checkbox" id="more-btn<?= $menuCounter ?>" class="more-btn">
                            <label for="more-btn<?= $menuCounter ?>" class="more-btn-label">
                                <span class="more-dot"></span>
                                <span class="more-dot"></span>
                                <span class="more-dot"></span>
                            </label>
                            <div class="more-menu">
                                <ul class="more-menu-items" tabindex="-1" role="menu" aria-hidden="true">
                                    <li class="more-menu-item" role="presentation">
                                        <button type="button" class="more-menu-btn" role="menuitem">Update</button>
                                    </li>
                                    <li class="more-menu-item" role="presentation">
                                        <button type="button" class="more-menu-btn" role="menuitem">Delete</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </td>
              </tr>

                    <div class="expanded-image" id="expandedImage">
                      <span onclick="closeExpandedImage()" style="position: absolute; top: 30px; right: 30px; color: #fff; font-size: 50px; cursor: pointer;">&times;</span>
                      <img src="" id="expandedImg" alt="Expanded Image">
                    </div>

                    <?php
                     $menuCounter++;
                } 
                } else
                {
                ?>
                <tr>
                <td colspan="6">No Student Record Found!</td>
                </tr>
                <?php
                }
                ?>

                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
 </div>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  function expandImage(src) {
    var expandedImg = document.getElementById("expandedImg");
    expandedImg.src = src;
    document.getElementById("expandedImage").style.display = "block";
  }

  function closeExpandedImage() {
    document.getElementById("expandedImage").style.display = "none";
  }
</script>

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