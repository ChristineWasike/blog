<?php
include("path.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Nji Mbitaownu</title>
    <link rel="shortcut icon" href="assets/img/shortcut_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    
    <!-- Open Sans Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/about.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="index.php">
      <picture>
      <source media="(min-width:650px)" srcset="assets/img/mwl_logo.png">
      <img src="assets/img/mws_logo.png" alt="...">
      </picture>
    </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="resume.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://blog.mbitaownu.com/blog/">Blog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
  
    </ul>
  </div>
</nav>

    <div class="container-fluid" id="main">

        <!-- ======= Start of About me Section ======= -->
        <section id="about-me">
            <div class="row about-me">
                <div class="col-md-6 image">
                    <img src="assets/img/about_me.jpg" alt="nji" id="about_image">
                </div>

                <!-- animate__animated animate__fadeInRight -->
                <div class="col-md-6 area-style description">
                    <h3>About me</h3>
                    <span style="color: #CDA750; font-weight: bold;">
                        <p>Who am I?</p>
                    </span>

                    <p style="font-weight: bold;">I’m Nji Mbitaownu, an Entrepreneurial Leader, Startup Strategist and
                        Entrepreneurship Coach.
                    </p>
                    <p>I am an entrepreneurial leader and ecosystem player passionate about helping
                        entrepreneurs find their strengths and voices even in the most unfavourable
                        situations. I work at the intersection of entrepreneurial foundations and finance
                        to connect the two as an unbroken bond. I use strategic foresight to bridge the gap
                        between entrepreneurial passion and market fits towards sustainable economic development
                        across all venture spectrums.</p>
                    <div class="row">
                        <div class="col-md-6">
                            <p>Name: Nji Mbitaownu</p>
                            <p>From: Cameroon</p>
                        </div>
                        <div class="col-md-6">
                            <p>Email: <span class="email">nji@mbitaownu.com</span></p>
                            <p>Location: Kigali, Rwanda</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a type="button submit" class="btn get-in-touch" href="contact.php">Get in
                                Touch</a>
                        </div>
                        <div class="col-md-6 about-socials">
                            <a href="https://twitter.com/njimmawah" target="_blank"><img src="assets/img/twitter.svg" alt="twitter" class="social-media" id="twitter"></a>
                            <a href="https://www.linkedin.com/in/nji-mbitaownu-mba-77768115b/" target="_blank"><img src="assets/img/linkedin.svg" alt="linkedin" class="social-media"></a>
                            <a href="https://www.instagram.com/njimmawah/" target="_blank"><img src="assets/img/instagram.svg" alt="instagram" class="social-media"></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <a id="scroll" href="#competencies"><span></span></a> -->
        </section>
        <!-- ======= End of About me Section ======= -->

        <!-- ======= Start of Competencies Section ======= -->
        <section id="competencies">
            <h5 style="text-align: center;" class="header">What I offer</h5>
            <h2 style="text-align: center;" class="header">Competencies</h2>
            <div class="row" id="competencies_row_1">
                <div class="card text-white bg-dark mb-3 mx-6 col-md-4" id="tolu-card" style="max-width: 20rem;">
                    <div class="card-body">
                        <img src="assets/img/fund.svg" style="height: 50px; width:50px;" alt="image">
                        <h5 class="card-title">Entrepreneurial <br>Finance</h5>
                    </div>
                </div>
                <div class="card text-white bg-dark mb-3 mx-6 col-md-4" id="tolu-card" style="max-width: 20rem;">
                    <div class="card-body">
                        <img src="assets/img/shop.svg" style="height: 50px; width:50px;" alt="image">
                        <h5 class="card-title">New Venture <br>Development</h5>
                    </div>
                </div>
                <div class="card text-white bg-dark mb-3 mx-6 col-md-4" id="tolu-card" style="max-width: 20rem;">
                    <div class="card-body">
                        <img src="assets/img/light-bulb.svg" style="height: 50px; width:50px;" alt="image">
                        <h5 class="card-title">Incubator <br>Development</h5>
                    </div>
                </div>

            </div>
            <div class="row" id="competencies_row_2">
                <div class="card text-white bg-dark mb-3 mx-6 col-md-4" id="tolu-card" style="max-width: 20rem;">
                    <div class="card-body">
                        <img src="assets/img/budget.svg" style="height: 50px; width:50px;" alt="image">
                        <h5 class="card-title">Financial <br>Accounting</h5>
                    </div>
                </div>
                <div class="card text-white bg-dark mb-3 mx-6 col-md-4" id="tolu-card" style="max-width: 20rem;">
                    <div class="card-body">
                        <img src="assets/img/presentation.svg" style="height: 50px; width:50px;" alt="image">
                        <h5 class="card-title">Facilitation</h5>
                    </div>
                </div>
                <div class="card text-white bg-dark mb-3 mx-6 col-md-4" id="tolu-card" style="max-width: 20rem;">
                    <div class="card-body">
                        <img src="assets/img/research.svg" style="height: 50px; width:50px;" alt="image">
                        <h5 class="card-title">Research <br>(Business & Academic)</h5>
                    </div>
                </div>

            </div>
            <!-- <a id="scroll" href="#testimonials"><span></span>scroll</a> -->
        </section>
        <!-- ======= End of Competencies Section ======= -->


        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    </div>

    <!-- ======= End of Testimonials Section ======= -->

    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>
    <!-- Footer -->

    <!--TODO  : Need to come back to this -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.js" integrity="sha512-HqbDsHIJoZ36Csd7NMupWFxC7e7aX2qm213sX+hirN+yEx/eUNlZrTWPs1dUQDEW4fMVkerv1PfMohR1WdFFJQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>


    <script src="assets/js/script.js"></script>
    <script src="assets/js/about.js"></script>
</body>

</html>