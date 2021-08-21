<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>abcwebsite.com</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="css/font.css" rel="stylesheet">
    <!-- CSS Libraries -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body onload="load()" data-spy="scroll" data-target=".navbar" data-offset="51">

<?php include('sideForm.php')?>


    <!-- Nav Bar Start -->
    <div class="navbar navbar-expand-lg bg-light navbar-light" style="z-index: 9999;">
        <div class="container-fluid nav">
            <a href="index.php" class="navbar-brand logo-link"><img src="logo.png" id="logo" class="logo" alt=""></a>
            <button type="button" class="navbar-toggler toggler-button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto" style="
    text-align: center;
    padding: 10px;
">
                    <a href="index.php" class="nav-item nav-link link">Home</a>
                    <a href="onlineClass.php" class="nav-item nav-link link">Online Class Help</a>
                    <a href="onlineCourse.php" class="nav-item nav-link link">Online Course Help</a>
                    <a href="onlineExam.php" class="nav-item nav-link link">Online Exam Help</a>
                    <a href="about.php" class="nav-item nav-link link">About Us</a>
                    <a href="contact-us.php" class="nav-item nav-link act active1">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav Bar End -->
     <!-- Hero Start -->
     <div class="hero" id="home">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-6">
                    <div class="hero-content">
                        <div class="hero-text">
                            <h1>CONTACT FORM</h1>
                            <h2></h2>
                            <div class="typed-text">24/7 Available, Affordable, Ensure Good Grades</div>
                        </div>
                        <div class="hero-btn">
                            <a class="btn" href="">Register Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 d-none d-md-block">
                    <div class="hero-image">
                        <img src="img/homeBanner.png" id="img" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

      <div class="container contact-form" style="padding: 40px;">
      <div class="form_head" style="background-color:red;padding:10px;">
        <h4>GET 50% DISCOUNT</h4>
    </div>
    
    <div class="bnn_right" style="padding: 20px 0px ;">
                 <div class="h_banner_form">
                 <div class="d-flex justify-content-center">
                <h4 class="text-uppercase font-weight-sbold fadeIn" style="padding:10px 0px 10px 0px ;visibility: visible; animation-name: fadeIn;">Book a free lesson</h4><span class="icon mdi icon-sm linearicons-pencil3" style="padding:10px 0px 20px 0px"></span>
              </div>
              <form class="rd-form rd-mailform form-lg mt-2" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Phone</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">E-mail</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Register Now</button>
            </form>
                 </div>
       </div>
      </div>

    <?php include('footer.php') ?>


<!-- Back to top button -->
<a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>


<!-- Pre Loader -->
<div id="loader" class="show">
    <div class="loader"></div>
</div>

<?php include('modal.php')?>




















<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="css/bootstrap-4.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/typed/typed.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<!-- JavaScript Bundle with Popper -->

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>