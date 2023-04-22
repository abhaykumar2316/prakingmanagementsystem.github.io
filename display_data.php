<?php 
//   if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
//         echo "<p align='center'>please login<br>";
//          echo "<a href='index.php'>login</a></p>";
//     }
//     else
// {
    
 ?>
<html>
<head>
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form in parking management jon </title>
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
                    <a href="tel:+000000000" class="tel"><i class="fa fa-phone" aria-hidden="true"></i>+00000000000</a>
                    <a href="@email.com"><i class="fa fa-envelope"
                            aria-hidden="true"></i>@gmail.com</a>
                </div>
                <nav class="d-flex aic">
                <button  data-target="#mymodel" data-toggle="modal" class="login btn btn-primary"><i class="fa fa-user" aria-hidden="true" style="color: white;"></i>account</button>
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
                        <li class="nav-item"><a class="nav-link" href="working.php">working</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">feedback</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">help</a></li>
                    </ul>
                </div>
            </nav>
             <form class="bg-white search-form" method="get" id="searchform">
            <div class="input-group col-md-4 Search" action="" method="POST">
                            <input class="field form-control" id="s" name="city" type="text" placeholder="Search">
                            <span class="input-group-btn">
                                <input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit"
                                    value="Search">
                            </span>
                        </div>
                  </form>
        </div>
      <div class="center">
        <table class="table table-bordered table-dark table-striped content">
          <thead>
            <tr class="table-dark">
              <th scope="col" class="table-dark">User Id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">City</th>
               <th scope="col">Zone</th>
              <th scope="col">Vehicle</th>
              <th scope="col">Vehicle No</th>
              <th scope="col">Price</th>
              <th scope="col">Delete</th>
              <th scope="col">Update</th>
            </tr>
          </thead>
          <tbody>
           
              <?php
              define('DB_SERVER', 'localhost');
              define('DB_USERNAME', 'root');
              define('DB_PASSWORD', '');
              define('DB_NAME', 'parking_management_system');

              // Try connecting to the Database
              $con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

              //Check the connection
              if($con == false){
                  dir('Error: Cannot connect');
              }
              // $city=$POST['city'];
              $selectquery = "SELECT*from user_booking";
              $query = mysqli_query($con,$selectquery);
              
             
              while ($res = mysqli_fetch_array($query)) {

                  
              ?>
            <tr>
              <th scope="row"><?php echo $res['booking_id'];?></th>
              <td><?php echo $res['first_name'];?><?php echo $res['last_name'];?></td>
              <td><?php echo $res['email'];?></td>
              <td><?php echo $res['phone_no'];?></td>
              <td><?php echo $res['city'];?></td>
              <td><?php echo $res['zone'];?></td>
              <td><?php echo $res['vehicle'];?></td>
              <td><?php echo $res['vehicle_no'];?></td>
              <td><?php echo $res['price'];?></td>
            <!--   <td><button class="btn-danger btn"><a href="delete.php?booking_id=<?php echo $res['booking_id'];?>"class="text-white">delete</a></button></td> -->
            <td><a class="btn-danger btn" href="delete.php?id=<?php echo $res['booking_id']; ?>">Delete</a></td>

            <td><a class="btn-danger btn" href="update.php?id=<?php echo $res['booking_id']; ?>">Update</a></td>


                
    
            </tr>
            <?php
             }
          ?>
          </tbody>
        </table>
    </div>
       <header>
      <script src="assets/js/jquery-3.3.1.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/loaders.css.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/lightgallery-all.min.js"></script>
    <script src="assets/js/main.js"></script>
    <div class="modal fade" id="mymodel" tabindex="-2">     
    <style>
        body {
     background: url("assets/images/smart-parking.jpg");
    background-size: cover;
    position: relative;
    z-index: 0; 
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-family: 'Montserrat', sans-serif;
    height: 100vh;
    margin: -20px 0 50px;
}
    .center {
        display: flex;
        justify-content: center;
    }
    .Search{
      left: 75%;
    }
     </style>
    }
    </header>
</body>
</html>
<?php
// }
//   ?>