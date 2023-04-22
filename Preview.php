<?php
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'parking_management_system');

        // Try connecting to the Database
        $conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

        //Check the connection
        if($conn == false){
            dir('Error: Cannot connect');
        }
         session_start();
         $email=$_SESSION["email"];
        $selectquery="SELECT * from user_data WHERE email='$email'";
        $query = mysqli_query($conn,$selectquery);
        $res = mysqli_fetch_array($query);
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>silip</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i%7CRajdhani:400,600,700"
      rel="stylesheet">
    <!-- Plugins Stylesheets -->
    <link rel="stylesheet" href="assets/css/loader/loaders.css">
    <link rel="stylesheet" href="assets/css/font-awesome/font-awesome.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/aos/aos.css">
    <link rel="stylesheet" href="assets/css/swiper/swiper.css">
    <link rel="stylesheet" href="assets/css/lightgallery.min.css">
    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="assets/css/responsive.css">
  </head>
  <body>
    <div class="css-loader">
      <div class="loader-inner line-scale d-flex align-items-center justify-content-center"></div>
    </div>
    <!-- Loader End -->
    <!-- Header Start -->
    <header class="position-absolute w-100"style="background-color: rgb(42 161 79 / 53%);">
    <div class="container">
      <div class="top-header d-none d-sm-flex justify-content-between align-items-center">
        <div class="contact">
          <a href="tel:+1234567890" class="tel"><i class="fa fa-phone" aria-hidden="true"></i>+1234567890</a>
          <a href="mailto:info@yourmail.com"><i class="fa fa-envelope"
            aria-hidden="true"></i>abhaykumar2316@gmail.com</a>
        </div>
        <nav class="d-flex aic">
          <a href="#" class="login"><i class="fa fa-user" aria-hidden="true"></i>Login</a><button type="button" class="btn btn-primary"><a href="logout.php" class="login" style=" color: white;">Logout</a></button>
          <ul class="nav social d-none d-md-flex">
            <li><a href="https://www.facebook.com/fh5co" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </nav>
      </div>
      <nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="index.html">PARKING MANAGMENT SYSTEM</a>
        <div class="group d-flex align-items-center">
          <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span></button>
          <a class="login-icon d-sm-none" href="#"><i class="fa fa-user"></i></a>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">working</a></li>
            <li class="nav-item"><a class="nav-link" href="#">feedback</a></li>
            <li class="nav-item"><a class="nav-link" href="#">help</a></li>
          </ul>
          <form class="bg-white search-form" method="get" id="searchform">
            <div class="input-group">
              <input class="field form-control" id="s" name="s" type="text" placeholder="Search">
              <span class="input-group-btn">
              <input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"
                value="Search">
              </span>
            </div>
          </form>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
          <form class="bg-white search-form" method="get" id="searchform">
            <div class="input-group">
              <input class="field form-control" id="s" name="s" type="text" placeholder="Search">
              <span class="input-group-btn">
              <input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"
                value="Search">
              </span>
            </div>
          </form>
        </div>
      </nav>
    </div>
    <div class="container1" id="container" style="padding-top: 10px;">
    <form action="data.php" method="POST"style="color: black;">
      <div style="background-color: #000000;">
        <h1 style="color: white;">silip</h1>
      </div>
      <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;background-color: white;">First name:</span>
        </div>
        <div class="col-md-8" style=" background-color: #fafafa;height: 40px; width: 100%; border:solid;">
          <?php echo $res['first_name'];  ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;background-color: white;">E-mail:</span>
        </div>
        <div class="col-md-8"style=" background-color: #fafafa;height: 40px; width: 100%;border:solid;">
          <?php echo $res['email'];  ?>
        </div>
    </div>
     <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;background-color: white;">Contact No.</span>
        </div>
        <div class="col-md-8"style=" background-color: #fafafa;height: 40px; width: 100%;border:solid;">
          <?php echo $res['contact'];  ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;background-color: white;">Parking zone</span>
        </div>
        <div class="col-md-8"style=" background-color: #fafafa;height: 40px; width: 100%;border:solid;">
          <?php echo $res['Parking_zone'];  ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;background-color: white;">Vehicle types:</span>
        </div>
      <div class="col-md-8"style=" background-color: #fafafa;height: 40px; width: 100%;border:solid;">
          <?php echo $res['Vehicle_types'];  ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;background-color: white;">Price</span>
        </div>
        <div class="col-md-8"style=" background-color: #fafafa;height: 40px; width: 100%;border:solid;">
          <?php echo $res['price'];  ?>
        </div>
    </div>
        <div class="row">
          <div class="col-md-4">
            &nbsp;
          </div>
          <div class="col-md-4" style="padding-bottom: 30px;">
            <button type="submit" class="button">submit</button>
          </div>
          <div class="col-md-4" style="padding-bottom: 30px;">
          <button type="submit" class="button">submit</button>
          </div>
        </div>
    </form>
    </div>
    <header>
      <script src="assets/js/jquery-3.3.1.js"></script>
      <script src="assets/js/bootstrap.bundle.js"></script>
      <script src="assets/js/loaders.css.js"></script>
      <script src="assets/js/aos.js"></script>
      <script src="assets/js/swiper.min.js"></script>
      <script src="assets/js/lightgallery-all.min.js"></script>
      <script src="assets/js/main.js"></script>
    </header>
  </body>
  <style>
    h1{
    padding: 10px;
    color:#c2c0c0;
    }
    form
    {
    text-align: center;
    }
    .form-control{
    border-color: black; 
    }
    .container1 {
    /*background-color: bisque;*/
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
    0 10px 10px rgba(0,0,0,0.22);
    position: relative;
    font-weight: bold;
    overflow: hidden;
    width: 768px;
    max-width: 100%;
    min-height: 480px;
    max-height: 100%;
    margin: auto;
    padding: auto;
    } 
    h1{
    color: #333;
    }
    .input{
    float: right;
    width: 60%;
    margin: 10px;
    padding: auto;
    }
    .button{
    color: #ffffff;
    text-align: right;
    background-color: #dc3545;
    border:1px solid #cc6868;
    border-radius: 4px;
    height: 40px;
    font-size: 16px;
    }
    .table{
    }
  </style>
</html>