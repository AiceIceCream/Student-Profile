<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>StudentInfoTrack</title>
  <link rel="website icon" type="png" href="assets/images/student.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><style>

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
            color: #fcf414;
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
  #about {
 padding: 60px 0 40px 0;
 position: relative;
 text-align: center;
}

#about::before {
 content: '';
 position: absolute;
 left: 0;
 right: 0;
 top: 0;
 bottom: 0;
 background: none;
 z-index: 9;
}

#about .container {
 position: relative;
 z-index: 10;
}
#about .about-col {
  background: #fff;
  border-radius: 0 0 4px 4px;
  box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
  margin-bottom: 20px;
}

#about .about-col .img {
  position: relative;
}

#about .about-col .img img {
  border-radius: 4px 4px 0 0;
}

#about .about-col .icon {
  width: 64px;
  height: 64px;
  padding-top: 8px;
  text-align: center;
  position: absolute;
  background-color: #3C5A99;
  border-radius: 50%;
  text-align: center;
  border: 4px solid #fff;
  left: calc( 50% - 32px);
  bottom: -30px;
  transition: 0.3s;
}

#about .about-col i {
  font-size: 40px;
  line-height: 1;
  color: #fff;
  transition: 0.3s;
}

#about .about-col:hover .icon {
  background-color: #ff5252;
}

#about .about-col:hover i {
  color: #ff5252;
}

#about .about-col h2 {
  color: #000;
  text-align: center;
  font-weight: 700;
  font-size: 25px;
  padding: 0;
  margin: 40px 0 12px 0;
}

#about .about-col h2 a {
  color: #000;
}

#about .about-col h2 a:hover {
  color: #ff5252;
}

#about .about-col p {
  font-size: 12px;
  line-height: 24px;
  color: #333;
  margin-bottom: 0;
  padding: 0 20px 20px 20px;
}

.about-box {
  border: 1px solid #ccc;
  border-radius: 5px;
  padding: 20px;
  margin-bottom: 20px;
  display: inline-block;
  width: calc(33.33% - 20px);
  box-sizing: border-box;
}

.about-box h2 {
  margin-top: 0;
}

.about-box p {
  margin-bottom: 0;
}

.about-box .img {
  margin-bottom: 15px;
}

.about-box .img img {
  border-radius: 4px;
}

#call-to-action {
 background: linear-gradient(rgba(21, 86, 112, 0.1), rgba(0, 0, 0, 0.1)), url(../img/call-to-action\ image.webp) fixed center center;
 background-size: cover;
 padding: 60px 0;
}

#call-to-action h3 {
 color: white;
 font-size: 28px;
 font-weight: 700;
}

#call-to-action p {
 color: white;
}

#call-to-action .cta-btn {
 font-family: "Montserrat", sans-serif;
 text-transform: uppercase;
 font-weight: 500;
 font-size: 16px;
 letter-spacing: 1px;
 display: inline-block;
 padding: 8px 28px;
 border-radius: 25px;
 transition: 0.3s;
 margin-top: 10px;
 border: 2px solid #000;
 color: #000;
}
#call-to-action .cta-btn:hover {
 background: #ff5252;
 border: 2px solid #000;
 color: white;
}
</style>
</head>
<body>
<div id="first">
      <header class="col-lg-12 col-md-6">
            <nav class="navbar" class="col-lg-12 col-md-6">
            <a href="instructorEnd.php" class=""><button class="btn-header">Home</button></a>
            <a href="about3.php" class=""><button class="btn-header">About us</button></a>
            <a href="contact3.php" class=""><button class="btn-header">Contact us</button></a>
            </nav>
        </header>
  
<section id="about">
  <div class="container">

    <div> 
      <h1 style="font-family: Serif, Garamond">About Us</h1>
      <p style="font-family: Serif, Garamond">We are TechTok! A team of designers, developers, and digital marketers in majestic place of CDO. StudentInfoTrack is the first product released by TechTok. As Mark Victor Hansen said, "By recording your dreams and goals, you set in motion the process of becoming the person you most want to be..."</p>
      </div> 

      <div class="container">
  <div class="row about-cols">
    <div class="col-md-4 wow fadeInUp">
      <div class="about-col">
        <div class="img">
          <img src="img/about-mission.webp" alt="" class="img-fluid">
          <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
        </div>
        <h2 class="title"><a href="#" style="text-decoration: none;">Our Mission</a></h2>
        <p class="text-center">
          To utilize the power of technology in setting and reaching goals...
        </p>
      </div>
    </div>

    <div class="col-md-4 wow fadeInUp">
      <div class="about-col">
        <div class="img">
          <img src="img/about-mission.webp" alt="" class="img-fluid">
          <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
        </div>
        <h2 class="title"><a href="#" style="text-decoration: none;">Our Plan</a></h2>
        <p class="text-center">
        We Plan to integrate application development and web to hitting your set targets.
        </p>
      </div>
    </div>
    
    <div class="col-md-4 wow fadeInUp">
      <div class="about-col">
        <div class="img">
          <img src="img/about-mission.webp" alt="" class="img-fluid">
          <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
        </div>
        <h2 class="title"><a href="#" style="text-decoration: none;">Our Vision</a></h2>
        <p class="text-center">
        Reaching more of your goals with StundentInfoTrack. <br> <br>
        </p>
      </div>
    </div>
  </div>
</div>

</section>

<section id="call-to-action" class="wow fadeIn">
  <div class="container text-center">
    <h4 style="font-family: Serif, Garamond">Having Problems keeping track on your Student Information?</h3>
    <p class="text-center" style="font-size: 12px; font-family: Serif, Garamond;">
     With StudentInfoTrack you can set and track your student information, update, manage, and lots more.      </p>
    <a class="cta-btn" href="register.php"style="text-decoration: none;">Get Started</a>
  </div>
</section>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>
</html>
