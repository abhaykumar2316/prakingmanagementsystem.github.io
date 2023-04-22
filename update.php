<?php
  // if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
  //       echo "<p align='center'>please login<br>";
  //        echo "<a href='index.php'>login</a></p>";
  //   }
 
 include 'connect.php';
 $bid = $_GET['id'];

$qry = mysqli_query($con, "SELECT * FROM user_booking WHERE booking_id = '".$bid."'");


// echo $qry = mysqli_query($con,"select * from user_booking where booking_id = 5 "); 

$data = mysqli_fetch_array($qry);


if(isset($_POST['update'])) 
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $city = $_POST['city'];
    $zone = $_POST['zone'];
    $vehicle = $_POST['vehicle'];
    $vehicle_no = $_POST['vehicle_no'];
    $price = $_POST['price'];
  
    $edit = mysqli_query($con,"update user_booking set first_name='$first_name', last_name='$last_name', email='$email', phone_no='$phone', city='$city', zone='$zone', vehicle='$vehicle', vehicle_no='$vehicle_no', price='$price' where booking_id ='$bid'");
  
    if($edit)
    {
        mysqli_close($con);
        header("location:display_data.php"); 
        exit;
    }
    else
    {
        echo mysqli_error();
    }     
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>update</title>
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
    <header class="position-absolute w-100">
        <div class="container">
            <div class="top-header d-none d-sm-flex justify-content-between align-items-center">
                <div class="contact">
                    <a href="tel:+1234567890" class="tel"><i class="fa fa-phone" aria-hidden="true"></i>+1234567890</a>
                    <a href="mailto:info@yourmail.com"><i class="fa fa-envelope"
                            aria-hidden="true"></i>abhaykumar2316@gmail.com</a>
                </div>
                <nav class="d-flex aic">
                    <a href="#" class="login"><i class="fa fa-user" aria-hidden="true"></i>Login</a>
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
        
        <div class="container1" id="container" style="padding-top: 10px; background-color:#ffffff00;">
     <form style="color: black; " action="user_data.php" method="POST">
        <div style="background-color: #000000;">
            <h1 style="color: white;">Update Data</h1>
        </div>
         <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: white;background-color: #ffffff00;">First name:</span>
        </div>
        <div class="col-md-8">
      <input type="text" style=" background-color: #fafafa42; width: 100%;height: 40px; color:white;" name="first_name" value="<?php echo $data['first_name'] ?>" placeholder="Enter First Name" Required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: white;background-color: #ffffff00;">Last name</span>
        </div>
        <div class="col-md-8">
         <input type="text" style=" background-color: #fafafa42; width: 100%;height: 40px; color:white;" name="last_name" value="<?php echo $data['last_name'] ?>" placeholder="Enter last name" Required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: white;background-color: #ffffff00;">E-mail:</span>
        </div>
        <div class="col-md-8">
          <input type="text" style=" background-color: #fafafa42; width: 100%;height: 40px; color:white;" name="email" value="<?php echo $data['email'] ?>" placeholder="Enter E-mail" Required>
        </div>
    </div>
     <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: white;background-color: #ffffff00;">Contact No:</span>
        </div>
        <div class="col-md-8">
       <input type="text" style=" background-color: #fafafa42; width: 100%;height: 40px; color:white;" name="phone_no" value="<?php echo $data['phone_no'] ?>" placeholder="Enter Contact No" Required>
        </div>
    </div>
    <div class="row">
      <div class="col-md-4" style="text-align: center;">
          <span style="color: white;background-color: #ffffff00;">City:</span>
      </div>
      <div class="col-md-8">
          <input type="text" style=" background-color: #fafafa42; width: 100%;height: 40px; color:white;" name="city" value="<?php echo $data['city'] ?>" placeholder="Enter city" Required>
      </div>
    </div>
     <div class="row">
      <div class="col-md-4" style="text-align: center;">
          <span style="color: white;background-color: #ffffff00;">Zone :-</span>
      </div>
      <div class="col-md-8">
         <input type="text" style=" background-color: #fafafa42; width: 100%;height: 40px; color:white;" name="zone" value="<?php echo $data['zone'] ?>" placeholder="Enter zone" Required>
      </div>
    </div>
     <div class="row">
      <div class="col-md-4" style="text-align: center;">
          <span style="color: white;background-color: #ffffff00;">Vehicle TYPE:</span>
      </div>
      <div class="col-md-8">
            <input type="text" style=" background-color: #fafafa42; width: 100%;height: 40px; color:white;" name="vehicle" value="<?php echo $data['vehicle'] ?>" placeholder="Enter vehicle" Required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4" style="text-align: center;">
          <span style="color: white;background-color: #ffffff00;">Vehicle_no:</span>
      </div>
      <div class="col-md-8">
         <input type="text" style=" background-color: #fafafa42; width: 100%;height: 40px; color:white;" name="vehicle_no" value="<?php echo $data['vehicle_no'] ?>" placeholder="Enter vehicle_no" Required>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4" style="text-align: center;">
          <span style="color: white;background-color: #ffffff00;">Price</span>
      </div>
      <div class="col-md-8">
        <input type="text" style=" background-color: #fafafa42; width: 100%;height: 40px; color:white;" name="price" value="<?php echo $data['price'] ?>" placeholder="Enter price" Required>
      </div>
    </div>
                      <div class="row">
                        <div class="col-md-4">
                            &nbsp;
                        </div>
                        <div class="col-md-4" style="padding-bottom: 30px;">
                           <input type="submit" name="update" value="Update">
                        </div>
                        <button  data-target="#mymodel" data-toggle="modal" class="login btn btn-primary">Selip</button>
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
       <div class="modal fade" id="mymodel" tabindex="-2">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" style="padding-left: 30%;">user detail</h5>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <h4 style="padding: 5px; padding-left: 30%;">customer id :-<?php echo $res['user_id']; ?> </h4>
                                <h4 style="padding: 5px; padding-left: 30%;">name :-<?php echo $res['user_name'];  ?> </h4>
                                <h4 style="padding: 5px; padding-left: 30%;">email :-<?php echo $_SESSION["email"]; ?> </h4>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary"><a href="logout.php" class="login" style=" color: white;">Logout</a></button>
                            </div>
                            </div>
                        </div>
                    </div>
</body>
<style>
    h1{
        padding: 10px;
        color:#c2c0c0;
    }
    body{
        background: url('https://www.ieiworld.com/_upload/news/images/iStock-460640155_1200x628(1).jpg') fixed 100%;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 0;
        margin:0;
        border:0;
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
