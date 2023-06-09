<?php
    if(isset($_SESSION["email"]) && isset($_SESSION["password"])) {
        header("Location:index.php");
    }
else
{
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
 $email=$_SESSION['email'];
$selectquery="SELECT * from user_data WHERE email='$email'";
$query = mysqli_query($conn,$selectquery);
$res = mysqli_fetch_array($query);
  ?>

<html lang="en">

<head>
    <!--
    /   Multipurpose: Free Template by FreeHTML5.co
    /   Author: https://freehtml5.co
    /   Facebook: https://facebook.com/fh5co
    /   Twitter: https://twitter.com/fh5co
    -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Document title -->
    <title>PARKING MANAGMENT SYSTEM</title>
    <!-- Stylesheets & Fonts -->
    <!-- Google Fonts -->
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
    <!-- Loader Start -->
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
                        <li class="nav-item"><a class="nav-link" onclick="myAbout()">About Us</a></li>
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
            </nav>
        </div>
    </header>
    <!-- Header End -->
    <!-- Hero Start -->
    <section class="hero img">
        <div>
            <div class="row">
                <div class="col-12 offset-md-1 col-md-11">
                    <div class="swiper-container hero-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide slide-content d-flex align-items-center">
                                <div class="single-slide">
                                    <h1 data-aos="fade-right" data-aos-delay="200">Creative<br> Multipurpose websites
                                    </h1>
                                    <p data-aos="fade-right" data-aos-delay="600">Crafted by innovative creators for
                                        Expecting
                                        Peoples’s predefined dummy text<br> chunks as necessary, making this the first.
                                    </p>
                                    <a data-aos="fade-right" data-aos-delay="900" href="#" class="btn btn-primary">See
                                        More</a>
                                    <a data-aos="fade-right" data-aos-delay="900" href="#" class="btn btn-primary">Get
                                        Now</a>
                                </div>
                            </div>
                            <div class="swiper-slide slide-content d-flex align-items-center">
                                <div class="single-slide">
                                    <h1 data-aos="fade-right" data-aos-delay="200">Creative<br> Multipurpose websites
                                    </h1>
                                    <p data-aos="fade-right" data-aos-delay="600">Crafted by innovative creators for
                                        Expecting
                                        Peoples’s predefined dummy text<br> chunks as necessary, making this the first.
                                    </p>
                                    <a data-aos="fade-right" data-aos-delay="900" href="#" class="btn btn-primary">See
                                        More</a>
                                    <a data-aos="fade-right" data-aos-delay="900" href="#" class="btn btn-primary">Get
                                        Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Add Control -->
            <span class="arr-left"><i class="fa fa-angle-left"></i></span>
            <span class="arr-right"><i class="fa fa-angle-right"></i></span>
        </div>
        <div class="texture"></div>
        <div class="diag-bg"></div>
    </section>
    <!-- Hero End -->
    <!-- Call To Action Start -->
    <section class="cta" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left">
                <div class="content" data-aos="fade-right" data-aos-delay="200">
                    <h2>working</h2>
                    <p>Packed with all the goodies you can get, Kallyas is our flagship premium template.</p>
                </div>
                <div class="subscribe-btn" data-aos="fade-left" data-aos-delay="400" data-aos-offset="0">
                    <a href="#" class="btn btn-primary">Join Newsletter</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action End -->
    <!-- Services Start -->
    <section class="services">
        <div class="container">
            <div class="title text-center">
                <h6>Our Speakers</h6>
                <h1 class="title-blue">Why Choose Us</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="200" data-aos-duration="400">
                            <div class="media-body">
                       <h5>about us</h5>
                                working  working  working  working  working  working  working 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="400" data-aos-duration="600">
                            <div class="media-body">
                                  <h5>working</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="media" data-aos="fade-up" data-aos-delay="600" data-aos-duration="800">
                            <div class="media-body">
                                    <h5>helping</h5>
                                Donec volutpat tincidunt neque, vitae lobortis libero mattis sed tempus.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services End -->
    <section class="recent-posts">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right"
                        data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3><a href="#">Proudly for us to build stylish</a></h3>
                            <p><a href="#">Seanding</a>, <a href="#">Website</a>, <a href="#">E-commerce</a></p>
                            <a class="post-btn" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="post-thumb">
                            <img class="img-fluid" src="assets/images/post1.jpg" alt="Post 1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-duration="800">
                        <div class="post-thumb">
                            <img class="img-fluid" src="assets/images/post2.jpg" alt="Post 1">
                        </div>
                        <div class="post-content">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3><a href="#">Remind me to water the plants</a></h3>
                            <p><a href="#">Seanding</a>, <a href="#">Website</a>, <a href="#">E-commerce</a></p>
                            <a class="post-btn" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-right" data-aos-delay="200"
                        data-aos-duration="800">
                        <div class="post-content text-sm-right">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3><a href="#">Add apples to the grocery list</a></h3>
                            <p><a href="#">Seanding</a>, <a href="#">Website</a>, <a href="#">E-commerce</a></p>
                            <a class="post-btn" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="post-thumb">
                            <img class="img-fluid" src="assets/images/post3.jpg" alt="Post 1">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-rpost d-sm-flex align-items-center" data-aos="fade-left" data-aos-delay="200"
                        data-aos-duration="800">
                        <div class="post-thumb">
                            <img class="img-fluid" src="assets/images/post4.jpg" alt="Post 1">
                        </div>
                        <div class="post-content">
                            <time datetime="2019-04-06T13:53">15 Oct, 2019</time>
                            <h3><a href="#">Make it warmer downstairs</a></h3>
                            <p><a href="#">Seanding</a>, <a href="#">Website</a>, <a href="#">E-commerce</a></p>
                            <a class="post-btn" href="#"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="btn btn-primary">See More</a>
            </div>
        </div>
    </section>
    <!-- Recent Posts End -->
    <!-- Pricing Start -->
    <section class="pricing-table">
        <div class="container">
            <div class="title text-center">
                <h6 class="title-primary">Our prices</h6>
                <h1 class="title-blue">Price Table List</h1>
            </div>
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="single-pricing text-center" data-aos="fade-up" data-aos-delay="0"
                        data-aos-duration="600">
                        <span>Monthly</span>
                        <h2>Starter</h2>
                        <p class="desc">Here goes some description</p>
                        <p class="price">$39.00</p>
                        <p>Create excepteur sint occaecat cupidatat non proident</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <svg viewBox="0 0 170 193">
                            <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                                d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-pricing text-center" data-aos="fade-up" data-aos-delay="300"
                        data-aos-duration="600">
                        <span>Monthly</span>
                        <h2>Starter</h2>
                        <p class="desc">Here goes some description</p>
                        <p class="price">$39.00</p>
                        <p>5GB Storage Space</p>
                        <p>20GB Monthly Bandwidth</p>
                        <p>My SQL Databases</p>
                        <p>100 Email Account</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <svg viewBox="0 0 170 193">
                            <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                                d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                        </svg>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-pricing text-center" data-aos="fade-up" data-aos-delay="600"
                        data-aos-duration="600">
                        <span>Monthly</span>
                        <h2>Starter</h2>
                        <p class="desc">Here goes some description</p>
                        <p class="price">$39.00</p>
                        <p>Create excepteur sint occaecat cupidatat non proident</p>
                        <a href="#" class="btn btn-primary">Buy Now</a>
                        <svg viewBox="0 0 170 193">
                            <path fill-rule="evenodd" fill="rgb(238, 21, 21)"
                                d="M39.000,31.999 C39.000,31.999 -21.000,86.500 9.000,121.999 C39.000,157.500 91.000,128.500 104.000,160.999 C117.000,193.500 141.000,201.000 150.000,183.000 C159.000,165.000 172.000,99.000 167.000,87.000 C162.000,75.000 170.000,63.000 152.000,45.000 C134.000,27.000 128.000,15.999 116.000,11.000 C104.000,6.000 89.000,-0.001 89.000,-0.001 L39.000,31.999 Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing End -->
    <!-- Testimonial and Clients Start -->
     
    <!-- Testimonial and Clients End -->
    <!-- Call To Action 2 Start -->
    <section class="cta cta2" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="cta-content d-xl-flex align-items-center justify-content-around text-center text-xl-left">
                <div class="content" data-aos="fade-right" data-aos-delay="200">
                    <h2>FOR BUILDING THE MODERN WEBSITE</h2>
                    <p>Packed with all the goodies you can get, Kallyas is our flagship premium template.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial-and-clients">
        <div class="container">
            <div class="testimonials">
                <div class="swiper-container test-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide text-center">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                            src="assets/images/test1.png" alt="Testimonial 1"></div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                        data-aos-offset="0">John</h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                                        data-aos-offset="0">UI/UX
                                        Designer</span>
                                    <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                                        data-aos-offset="0">Ash's tactics &
                                        books have helped me a lot in my understanding on how social
                                        media
                                        advertising works.I can say that he is one of the best development professionals
                                        i have
                                        dealt with so far. His experience is great & he is such a great & pleasant
                                        person to
                                        work with as he understands what you are</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                            src="assets/images/test1.png" alt="Testimonial 1"></div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                        data-aos-offset="0">John</h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                                        data-aos-offset="0">UI/UX
                                        Designer</span>
                                    <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                                        data-aos-offset="0">Ash's tactics &
                                        books have helped me a lot in my understanding on how social
                                        media
                                        advertising works.I can say that he is one of the best development professionals
                                        i have
                                        dealt with so far. His experience is great & he is such a great & pleasant
                                        person to
                                        work with as he understands what you are</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide text-center">
                            <div class="row">
                                <div class="offset-lg-1 col-lg-10">
                                    <div class="test-img" data-aos="fade-up" data-aos-delay="0" data-aos-offset="0"><img
                                            src="assets/images/test1.png" alt="Testimonial 1"></div>
                                    <h5 data-aos="fade-up" data-aos-delay="200" data-aos-duration="600"
                                        data-aos-offset="0">John</h5>
                                    <span data-aos="fade-up" data-aos-delay="400" data-aos-duration="600"
                                        data-aos-offset="0">UI/UX
                                        Designer</span>
                                    <p data-aos="fade-up" data-aos-delay="600" data-aos-duration="600"
                                        data-aos-offset="0">Ash's tactics &
                                        books have helped me a lot in my understanding on how social
                                        media
                                        advertising works.I can say that he is one of the best development professionals
                                        i have
                                        dealt with so far. His experience is great & he is such a great & pleasant
                                        person to
                                        work with as he understands what you are</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="test-pagination"></div>
                </div>
            </div>
            <div class="clients" data-aos="fade-up" data-aos-delay="200" data-aos-duration="600">
                <div class="swiper-container clients-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/client1.png" alt="Client 1">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/client2.png" alt="Client 2">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/client3.png" alt="Client 3">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/client4.png" alt="Client 4">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/client5.png" alt="Client 5">
                        </div>
                    </div>
                    <div class="test-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action 2 End -->
    <!-- Footer Start -->
    
    <!-- Footer Endt -->
    <!--jQuery-->
    <script src="assets/js/jquery-3.3.1.js"></script>
    <!--Plugins-->
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/loaders.css.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/lightgallery-all.min.js"></script>
    <!--Template Script-->
    <script src="assets/js/main.js"></script>
    <script>
        function myAbout() {
            document.getElementsByClassName('services')[0].scrollIntoView();
        }
    </script>
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
    <style>
        .img{
            background: url("assets/images/smart-parking.jpg");
             background-size: cover;
            overflow: hidden;
            position: relative;
            z-index: 0; 
        }
    </style>
</body>

</html>
<?php
}
  ?>