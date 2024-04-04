<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Profile</title>
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
            background-image: linear-gradient(to bottom, #48bbe3, #42b3cf, #42aabc, #46a1a9, #4b9797);
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 110vh;
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

        .btn-file{
            width: 150px;
            padding: 0;
            border: none;
            transform: rotate(5deg);
            transform-origin: center;
            font-family: "Gochi Hand", cursive;
            text-decoration: none;
            font-size: 15px;
            cursor: pointer;
            padding-bottom: 3px;
            border-radius: 5px;
            box-shadow: 0 2px 0 #494a4b;
            transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background-color: #5cdb95;
            margin: 30px;
        }

        .btn-file span{
            background: #f1f5f8;
            display: block;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            border: 2px solid #494a4b;
        }

        .btn-file:active{
            transform: translateY(5px);
            padding-bottom: 0px;
            outline: 0;
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
    </style>
</head>
<body>
    <div id="first">

        <header class="col-lg-12 col-md-6">
            <nav class="navbar" class="col-lg-12 col-md-6">
            <a href="index.php" class=""><button class="btn-header">Home</button></a>
            <a href="#" onclick=""><button class="btn-header">About Us</button></a>
            <a href="#" onclick=""><button class="btn-header">Contact Us</button></a>
            </nav>
        </header>
        

        <div id="welcome-text" class="col-lg-12 col-md-6">
            <image src="assets/images/stud.png">
            <p style="font-size: 20px ; font-family: Gochi Hand, cursive; color: white">Struggling on how to manage your student list? Worry no more,<br/> StudentInfoTrack is here, a cross platform system organizing your list with no hassle.</p>
        </div>

        <div id="button-container">
            <a href="#"><button class="btn-file"><span>IT3R4<span></button></a>
            <a href="students.php"><button class="btn-file"><span>IT3R6<span></button></a>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
      
    </script>
</body>
</html>