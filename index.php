<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bizboost Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body{
            margin: 0;
            padding: 0;
            height: auto;
        }

        #first{
            margin: 0;
            padding: 0;
            background-image: linear-gradient(to bottom, rgba(207, 178, 234, 0.8),rgba(112, 93, 155, 1));
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100vh;
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

        header .icons {
            display: flex;
            align-items: center;
            margin-right: 20px;
            font-family: tahoma;
        }

        header #sign {
            color: white;
            text-decoration: none;
            font-size: 18px;
            margin-left: 20px;
        }

        header #sign:hover {
          color: gray;
        }

        #welcome-text {
            font-size: 24px;
            margin-top: 10px;
        }

        #welcome-text img {
            width: 300px;
            margin-top: 80px;
            margin-bottom: 30px;
        }

        #button-container {
            justify-content: center;
            margin-top: 20px;
            margin-bottom: 10px;
        }

        #button-container button{
          border-radius: 40px;
          width: 150px;
          height: 50px;
          color: blue;
          font-size: 15px;
        }

        #button-container button:hover{
          color: black;
        }
    </style>
</head>
<body>
    <div id="first">

        <header class="col-lg-12 col-md-6">
            <nav class="navbar" class="col-lg-12 col-md-6">
            <a href="index.php" class="">Home</a>
            <a href="#" onclick="">About Us</a>
            <a href="#" onclick="">Contact Us</a>
            </nav>
        </header>

        <div id="welcome-text" class="col-lg-12 col-md-6">
            <image src="assets/images/stud.png">
            <p style="font-size: 20px ; font-family: tahoma ; color: black">Title diri tong naa sa paper na gibuhat niagi nga gipasa <br/> ikaw na bahala dayn design</p>
        </div>

        <div id="button-container">
            <a href="register.php"><button>Show Students</button></a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
      
    </script>
</body>
</html>