 <?php 
                include 'connect.php';
                $selectquery8="SELECT p_zone FROM city";
                $q=mysqli_query($con,$selectquery8);
                $z=mysqli_fetch_array($q);
                while ( $z=mysqli_fetch_array($q)) {
                    echo $z['p_zone'] ;
                }
                $selectquery="SELECT vehicle FROM user_booking where vehicle='two_wheeler'";
                $query = mysqli_query($con,$selectquery);
                $two_wheeler = mysqli_num_rows($query);
                $selectquery1="SELECT two_wheeler_f FROM parking_area_detail where parking_zone=5";
                $query1 = mysqli_query($con,$selectquery1);
                $parking_zone = mysqli_fetch_array($query1);         
                $selectquery2="SELECT vehicle FROM user_booking where vehicle='three_wheeler'";
                $query2 = mysqli_query($con,$selectquery2);
                $three_wheeler = mysqli_num_rows($query2);
                $selectquery5="SELECT three_wheeler_f FROM parking_area_detail where parking_zone=5";
                $query5 = mysqli_query($con,$selectquery5);
                // $parking_zone2 = mysqli_fetch_array($query5);
                $selectquery3="SELECT vehicle FROM user_booking where vehicle='four_wheeler'";
                $query3= mysqli_query($con,$selectquery3);
                $four_wheeler = mysqli_num_rows($query3);
                $selectquery6="SELECT four_wheeler_f FROM parking_area_detail where parking_zone=5";
                $query6 = mysqli_query($con,$selectquery6);
                $parking_zone3 = mysqli_fetch_array($query6);
                $selectquery4="SELECT vehicle FROM user_booking where vehicle='six_wheeler'";
                $query4 = mysqli_query($con,$selectquery4);
                $six_wheeler = mysqli_num_rows($query4);
                $selectquery7="SELECT six_wheeler_f FROM parking_area_detail where parking_zone=5";
                $query7 = mysqli_query($con,$selectquery7);
                $parking_zone4 = mysqli_fetch_array($query7);
                 ?>
<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>working </title>
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
    <header class="position-absolute w-100"style="background-color: rgb(219 55 191 / 0%); background-repeat: no-repeat;
  background-size: 100% 100%;">
        <div class="container">
            <div class="top-header d-none d-sm-flex justify-content-between align-items-center">
                <div class="contact">
                    <a href="tel:+1234567890" class="tel"style="color:#000000;"><i class="fa fa-phone" aria-hidden="true"></i>+1234567890</a>
                    <a href="mailto:info@yourmail.com"style="color:#000000;"><i class="fa fa-envelope"
                            aria-hidden="true"></i>abhaykumar2316@gmail.com</a>
                </div>
                <nav class="d-flex aic">
                    <ul class="nav social d-none d-md-flex">
                        <li><a href="https://www.facebook.com/fh5co" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </nav>
            </div>
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="index.html" style="color:#000000;font-size: 30px;"><b>PARKING MANAGMENT SYSTEM</b></a>
                <div class="group d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <a class="login-icon d-sm-none" href="#"><i class="fa fa-user"></i></a>
                </div>
                 <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#" style="color:#000000; font-size: 18px;"><b>Home</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"style="color:#000000;font-size: 18px;"><b>working</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="#"style="color:#000000;font-size: 18px;"><b>feedback</b></a></li>
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
        
        <div class="container1" id="container" style="padding-top: 10px; background-color: #e8f6fa36;">
     <form style="color: black;" action="user_data.php" method="POST">
        <div style="background-color: #000000;">
            <h1 style="color: white;">BOOKING PARKING SLOT</h1>
        </div>
         <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;background-color:#e8f6fa00;"> NAME:</span>
        </div>
        <div class="col-md-4">
          <input type="text" aria-label="First name" name="first_name" style=" background-color: #fafafa8f;height: 40px; width: 100%" placeholder="first_name" required>
        </div>
        <div class="col-md-4">
          <input type="text" aria-label="Last name" name="last_name" style=" background-color: #fafafa8f; width: 100%;height: 40px;"  placeholder="last_name" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;black;background-color:#e8f6fa00;">E-mail:</span>
        </div>
        <div class="col-md-8">
          <input type="text" aria-label="First name" name="email" style=" background-color: #fafafa8f;height: 40px; width: 100%;" placeholder="E-mail" required>
        </div>
    </div>
     <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;black;background-color:#e8f6fa00;">Contact No.</span>
        </div>
        <div class="col-md-8">
          <input type="number" aria-label="First name" name="phone_no" style=" background-color: #fafafa8f;height: 40px; width: 100%;" placeholder="contact No"  required>
        </div>
    </div>
     <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;black;background-color: #e8f6fa00;">City</span>
        </div>
        <div class="col-md-8">
          <div>
                <select class="custom-select " name="city" id="inputGroupSelect01"style="color: black;background-color: #fafafa8f;height: 40px; width: 100%;border-color: black;" required>
                    <option value=""  style="color: black;">Choose...</option>
                    <option value="1" style="color: black;">Bareilly</option>
                    <option value="2" style="color: black;">pilibhit</option>
                    <option value="3" style="color: black;">Lucknow</option>
                    <option value="4" style="color: black;">Delhi</option>
                    <option value="5" style="color: black;">Mumbai</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;black;background-color:#e8f6fa00;">Parking zone :</span>
        </div>
       <div class="col-md-8">
             <select class="custom-select" id="inputGroupSelect01" name="zone" style="color: black;background-color: #fafafa8f;height: 40px; width: 100%;border-color: black;" required>
                <option value=""  style="color: black;">Choose...</option>
                <option value="phoenix_mall" style="color: black;">phoenix mall</option>
                <option value="vishal_mall" style="color: black;">vishal mall</option>
                <option value="phoenix_mall" style="color: black;">phoenix mall</option>
                <option value="3" style="color: black;">vishal mall</option>
                  <option value="3" style="color: black;">invertis</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;black;background-color: #e8f6fa00;">Choice Vehicle :</span>
        </div>
       <div class="col-md-8">
             <select class="custom-select" id="inputGroupSelect01" name="vehicle" style="color: black;background-color: #fafafa8f;height: 40px; width: 100%;border-color: black;" required>
                <option value=""  style="color: black;">Choose...</option>
                <?php if ($two_wheeler<=$parking_zone['two_wheeler_f']) {
                ?>
               <option value="two_wheeler" style="color: black;">two wheeler</option> 
               <?php
               }  
               ?>
                <?php if ($three_wheeler<=$parking_zone2['three_wheeler_f']) {
                ?>
                <option value="three_wheeler" style="color: black;">three wheeler</option>
                 <?php
               }  
               ?>
                 <?php if ($four_wheeler<=$parking_zone3['four_wheeler_f']) {
                ?>
                <option value="four_wheeler" style="color: black;">four wheeler</option>
                 <?php
               }  
               ?>
                 <?php if ($six_wheeler<=$parking_zone4['six_wheeler_f']) {
                ?>
                <option value="3" style="color: black;">six wheeler</option>
                <?php
               }  
               ?>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;black;background-color:#e8f6fa00;">Price</span>
        </div>
            <div class="col-md-8">
               <div>
                    <select class="custom-select " id="inputGroupSelect01" name="price" style="color: black;background-color: #fafafa8f;height: 40px; width: 100%;border-color: black;" required>
                        <option value="" style="color: black;">Choose...</option>
                        <option value="1" style="color: black;">Rs.5 of 1 hours</option>
                        <option value="2" style="color: black;">Rs.10 of 2 hours</option>
                        <option value="3" style="color: black;">Rs.15 of 3 hours</option>
                        <option value="4" style="color: black;">Rs.20 of 4 hours</option>
                        <option value="5" style="color: black;">Rs.40 of 12 hours</option>
                    </select>
                </div>
        </div>
    </div>
     <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;background-color: #e8f6fa00;">Vehicle No.</span>
        </div>
        <div class="col-md-8">
          <input type="text" aria-label="First name" name="vehicle_no" style=" background-color: #fafafa8f;height: 40px; width: 100%" placeholder="Vehicle Number" required>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4" style="text-align: center;">
          <span style="color: black;background-color: #e8f6fa00;">Arrival Time:</span>
        </div>
        <div class="col-md-8">
          <input type="text" aria-label="First name" name="Arrival_Time" style=" background-color: #fafafa8f;height: 40px; width: 100%" required>
        </div>
                    <div class="row">
                        <div class="col-md-4">
                            &nbsp;
                        </div>
                        <div class="col-md-8" style="padding-bottom: 30px;">
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
    body{
          background: url('https://www.ieiworld.com/_upload/news/images/iStock-460640155_1200x628(1).jpg') no-repeat fixed 100%;
          background-size: cover;
    }
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
