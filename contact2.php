<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentInfoTrack</title>
    <link rel="website icon" type="png" href="assets/images/student.png">
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
    margin-top: 40px;
}

#welcome-text img {
    width: 350px;
    margin-top: 10px;
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

.contact_inner{
    background-color: #fff;
    position: relative;
    box-shadow: 20px 22px 44px #cccc;
    border-radius: 25px;
}
.contact_field{
    padding: 60px 340px 90px 100px;
}
.right_conatct_social_icon{
    height: 100%;
}

.contact_field h3{
   color: #000;
    font-size: 40px;
    letter-spacing: 1px;
    font-weight: 600;
    margin-bottom: 10px
}
.contact_field p{
    color: #000;
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1px;
    margin-bottom: 35px;
}
.contact_field .form-control{
    border-radius: 0px;
    border: none;
    border-bottom: 1px solid #ccc;
}
.contact_field .form-control:focus{
    box-shadow: none;
    outline: none;
    border-bottom: 2px solid #1325e8;
}
.contact_field .form-control::placeholder{
    font-size: 13px;
    letter-spacing: 1px;
}

.contact_info_sec {
    position: absolute;
    background-color: #2d2d2d;
    right: 1px;
    top: 18%;
    height: 340px;
    width: 340px;
    padding: 40px;
    border-radius: 25px 0 0 25px;
}
.contact_info_sec h4{
    letter-spacing: 1px;
    padding-bottom: 15px;
}

.info_single{
    margin: 30px 0px;
}
.info_single i{
    margin-right: 15px;
}
.info_single span{
    font-size: 14px;
    letter-spacing: 1px;
}

button.contact_form_submit {
    background-color: #ff5252;
    border: none;
    color: #fff;
    padding: 10px 15px;
    width: 100%;
    margin-top: 25px;
    border-radius: 35px;
    cursor: pointer;
    font-size: 14px;
    letter-spacing: 2px;
}
.socil_item_inner li{
    list-style: none;
}
.socil_item_inner li a{
    color: #fff;
    margin: 0px 15px;
    font-size: 14px;
}
.socil_item_inner{
    padding-bottom: 10px;
}

.map_sec{
    padding: 50px 0px;
}
.map_inner h4, .map_inner p{
    color: #000;
    text-align: center
}
.map_inner p{
    font-size: 13px;
}
.map_bind{
   margin-top: 50px;
    border-radius: 30px;
    overflow: hidden;
}
    </style>
</head>
<div id="first">
      <header class="col-lg-12 col-md-6">
            <nav class="navbar" class="col-lg-12 col-md-6">
            <a href="studentEnd.php" class=""><button class="btn-header">Home</button></a>
            <a href="about2.php" class=""><button class="btn-header">About us</button></a>
            <a href="contact2.php" class=""><button class="btn-header">Contact us</button></a>
            </nav>
        </header>
        
        
<section class="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="contact_inner">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="contact_form_inner">
                                    <div class="contact_field">
                                        <h3>Contact Us</h3>
                                        <p>Feel Free to contact us any time. We will get back to you as soon as we can!.</p>
                                        <input type="text" class="form-control form-group" placeholder="Name" />
                                        <input type="text" class="form-control form-group" placeholder="Email" />
                                        <input class="form-control form-group" placeholder="Message"></input>
                                        <button class="contact_form_submit">Send</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="right_conatct_social_icon d-flex align-items-end">
                                   <div class="socil_item_inner d-flex">
                                      <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                                      <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                   </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact_info_sec">
                            <h4>Contact Info</h4>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-headset"></i>
                                <span>09652976543</span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-envelope-open-text"></i>
                                <span>StudentInfoTrack@ustp.edu.ph</span>
                            </div>
                            <div class="d-flex info_single align-items-center">
                                <i class="fas fa-map-marked-alt"></i>
                                <span>Cagayan de Oro Misamis Oriental</span>
                            </div>
            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    
    <section class="map_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="map_inner">
                        <h4>Find Us on Google Map</h4>
                        <p>"Find us easily on Google Maps to locate our exact location and discover the quickest route to reach us."</p>
                        <div class="map_bind">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d7892.300477121881!2d124.6567168!3d8.4847692!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x32fff2c3ca5ae8c7%3A0x880805868ab84491!2sUniversity%20of%20Science%20and%20Technology%20of%20Southern%20Philippines%20-%20CDO%20Campus%20MUST%20Engineering%20Building%20Cagayan%20de%20Oro%209000%20Misamis%20Oriental!3m2!1d8.484769199999999!2d124.6567168!5e0!3m2!1sen!2sph!4v1712459278246!5m2!1sen!2sph" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  
</body>
</html>