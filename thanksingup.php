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
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">feedback</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">help</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <img src="data:image/jpeg;base64,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" alt="Girl in a jacket" width="1000" height="400">
        <h1>thank you for singup</h1>
            <div class="subscribe-btn container my-4" data-aos="fade-left" data-aos-delay="400" data-aos-offset="0">
                    <a href="index.php" class="btn btn-primary">singIn</a>
            </div>
    </header>
    <!-- Header End -->
    <!-- Hero Start -->

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
    
    <style>
       h1{
        font-family: sans-serif;
        font-size: 100px;
        text-align: center;
       }
       img{
      padding-left: 30%; 
       }
    </style>
</body>

</html>