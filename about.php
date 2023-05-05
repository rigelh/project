<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>DRYME - Free Laundry Service Website Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="Free HTML Templates" name="keywords" />
  <meta content="Free HTML Templates" name="description" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid bg-primary py-3"></div>
  <!-- Topbar End -->
  <!-- Navbar Start -->
  <div class="container-fluid position-relative nav-bar p-0">
    <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9">
      <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
        <a href="" class="navbar-brand">
          <h1 class="m-0 text-secondary">
            <span class="text-primary">DRY</span>ME
          </h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
          <div class="navbar-nav ml-auto py-0">
            <a href="index.php" class="nav-item nav-link">Home</a>
            <a href="about.php" class="nav-item nav-link active">About</a>
            <a href="service.php" class="nav-item nav-link">Services</a>
            <a href="pricing.php" class="nav-item nav-link ">Pricing</a>


            <?php if (isset($_SESSION["user_id"])) { ?>
              <a href="logout.php" class="nav-item nav-link">Log out</a>
            <?php } else  ?> <a href="signup.php" class="nav-item nav-link">Sign up</a><?php
                                                                                        ?>

          </div>
        </div>
      </nav>
    </div>
  </div>
  <!-- Navbar End -->

  <!-- Page Header Start -->
  <div class="page-header container-fluid bg-secondary pt-2 pt-lg-5 pb-2 mb-5">
    <div class="container py-5">
      <div class="row align-items-center py-4">
        <div class="col-md-6 text-center text-md-left">
          <h1 class="mb-4 mb-md-0 text-white">About Us</h1>
        </div>
        <div class="col-md-6 text-center text-md-right">
          <div class="d-inline-flex align-items-center">
            <a class="btn text-white" href="index.php">Home</a>
            <i class="fas fa-angle-right text-white"></i>
            <a class="btn text-white disabled" href="about.php">About Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Header Start -->

  <!-- About Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <img class="img-fluid" src="img/about.jpg" alt="" />
        </div>
        <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
          <h6 class="text-secondary text-uppercase font-weight-medium mb-3">
            Learn About Us
          </h6>
          <h1 class="mb-4">We Are Quality Laundry Provider In Your City</h1>
          <h5 class="font-weight-medium font-italic mb-4">
            Do you want to save 3 hours of your week? Then DRYME is the best
            choice for your laundry
          </h5>
          <p class="mb-2">
            Your clothes are picked up from your door, expertly cleaned, and
            returned 3-4 days later crisp, clean, and ready to wear.
          </p>
          <div class="row">
            <div class="col-sm-6 pt-3">
              <div class="d-flex align-items-center">
                <i class="fa fa-check text-primary mr-2"></i>
                <p class="text-secondary font-weight-medium m-0">
                  Quality Laundry Service
                </p>
              </div>
            </div>
            <div class="col-sm-6 pt-3">
              <div class="d-flex align-items-center">
                <i class="fa fa-check text-primary mr-2"></i>
                <p class="text-secondary font-weight-medium m-0">
                  Express Fast Delivery
                </p>
              </div>
            </div>
            <div class="col-sm-6 pt-3">
              <div class="d-flex align-items-center">
                <i class="fa fa-check text-primary mr-2"></i>
                <p class="text-secondary font-weight-medium m-0">
                  Highly Professional Staff
                </p>
              </div>
            </div>
            <div class="col-sm-6 pt-3">
              <div class="d-flex align-items-center">
                <i class="fa fa-check text-primary mr-2"></i>
                <p class="text-secondary font-weight-medium m-0">
                  100% Satisfaction Gguarantee
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About End -->

  <!-- Working Process Start -->
  <div class="container-fluid pt-5">
    <div class="container">
      <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">
        Working Process
      </h6>
      <h1 class="display-4 text-center mb-5">How We Work</h1>
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="
                  width: 150px;
                  height: 150px;
                  border-width: 15px !important;
                ">
              <h2 class="display-2 text-secondary m-0">1</h2>
            </div>
            <h3 class="font-weight-bold m-0 mt-2">Order Place</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="
                  width: 150px;
                  height: 150px;
                  border-width: 15px !important;
                ">
              <h2 class="display-2 text-secondary m-0">2</h2>
            </div>
            <h3 class="font-weight-bold m-0 mt-2">Free Pick Up</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="
                  width: 150px;
                  height: 150px;
                  border-width: 15px !important;
                ">
              <h2 class="display-2 text-secondary m-0">3</h2>
            </div>
            <h3 class="font-weight-bold m-0 mt-2">Dry Cleaning</h3>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
            <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="
                  width: 150px;
                  height: 150px;
                  border-width: 15px !important;
                ">
              <h2 class="display-2 text-secondary m-0">4</h2>
            </div>
            <h3 class="font-weight-bold m-0 mt-2">Free Delivery</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Working Process End -->

  <!-- Features Start -->
  <div class="container-fluid py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
          <h6 class="text-secondary text-uppercase font-weight-medium mb-3">
            Our Features
          </h6>
          <h1 class="mb-4">Why Choose Us</h1>
          <p>
            Your safety is our top priority. From contactless pickups and
            deliveries, to regimented cleaning processes, to daily employee
            health assessments, DRYME has implemented industry-best practices
            with your safety in mind.
          </p>
          <div class="row">
            <div class="col-sm-6 mb-4">
              <h1 class="text-secondary" data-toggle="counter-up">10</h1>
              <h5 class="font-weight-bold">Years Expereince</h5>
            </div>
            <div class="col-sm-6 mb-4">
              <h1 class="text-secondary" data-toggle="counter-up">250</h1>
              <h5 class="font-weight-bold">Expert Worker</h5>
            </div>
            <div class="col-sm-6 mb-4">
              <h1 class="text-secondary" data-toggle="counter-up">1250</h1>
              <h5 class="font-weight-bold">Happy Clients</h5>
            </div>
            <div class="col-sm-6 mb-4">
              <h1 class="text-secondary" data-toggle="counter-up">9550</h1>
              <h5 class="font-weight-bold">Dry Cleaning</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="d-flex flex-column align-items-center justify-content-center bg-secondary h-100 py-5 px-3">
            <i class="fa fa-5x fa-certificate text-white mb-5"></i>
            <h1 class="display-1 text-white mb-3">10+</h1>
            <h1 class="text-white m-0">Years Experience</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Features End -->

  <!-- Footer Start -->
  <div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
    <div class="container">
      <div class="row pt-5">
        <div class="col-12 col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-5">
          <a href="">
            <h1 class="text-secondary mb-3">
              <span class="text-white">DRY</span>ME
            </h1>
          </a>
          <p>
            You can find us on all social platforms. Be sure to use DRYME as
            it will be your best experience.
          </p>
          <div class="d-flex justify-content-start mt-4">
            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-twitter"></i></a>
            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-facebook-f"></i></a>
            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-linkedin-in"></i></a>
            <a class="btn btn-outline-light rounded-circle text-center mr-2 px-0" style="width: 38px; height: 38px" href="#"><i class="fab fa-instagram"></i></a>
          </div>
        </div>

        <div class="col-12 col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-5">
          <h4 class="text-white mb-4">Get In Touch</h4>
          <p>
            You can find us on all social platforms. Be sure to use DRYME as
            it will be your best experience.
          </p>
          <p>
            <i class="fa fa-map-marker-alt mr-2"></i>rruga xxx, Tirana ,
            Albania
          </p>
          <p><i class="fa fa-phone-alt mr-2"></i>+355 xxxxxxxxx</p>
          <p><i class="fa fa-envelope mr-2"></i>info@example.com</p>
        </div>

        <div class="col-12 col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-5">
          <div class="d-flex flex-column justify-content-end">
            <h4 class="text-white mb-4">Quick Links</h4>
            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Services</a>
            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing</a>
            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
    <p class="m-0 text-center text-white">
      <a class="text-white font-weight-medium" href="#">DRYME</a>© DRYME. All Rights Reserved.
    </p>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Javascript File -->
  <script src="mail/jqBootstrapValidation.min.js"></script>
  <script src="mail/contact.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>