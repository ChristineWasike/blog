<?php
include("path.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume | Nji Mbitaownu</title>
    <link rel="shortcut icon" href="assets/img/shortcut_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">
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
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="resume.php">Services  <span class="sr-only">(current)</span></a>
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
    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
        <div class="container">

            <div class="section-title">
                <h2 style="font-weight: bolder;">Resume</h2>

            </div>

            <div class="row">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="resume-title">Professional Experience</h3>
                    <div class="resume-item">
                        <h4>Incubator Manager with School of Wildlife Conservation</h4>
                        <a href="https://sowc.alueducation.com/" style="color: cadetblue;" target="_blank">
                            <p><em>African Leadership University, Rwanda</em></p>
                        </a>
                        <p><em>Feb 2021 - Present</em></p>
                        <!-- <ul>
                            <li>Lead in the design and implementation of the graphic layout</li>
                            <li>Delegate tasks to 7 members of the design team </li>
                            <li>Supervise the assessment of graphic materials</li>
                            <li>Oversee the efficient use of production project $2,000 - $25,000</li>
                        </ul> -->
                    </div>

                    <div class="resume-item">
                        <h4>Course Facilitator</h4>
                        <a href="https://alueducation.com/" style="color: cadetblue;" target="_blank">
                            <p><em>African Leadership University, Rwanda</em></p>
                        </a>
                        <p><em>Jan 2020 - Present</em></p>
                        <!-- <ul>
                            <li>Lead in the design and implementation of the graphic layout</li>
                            <li>Delegate tasks to 7 members of the design team </li>
                            <li>Supervise the assessment of graphic materials</li>
                            <li>Oversee the efficient use of production project $2,000 - $25,000</li>
                        </ul> -->
                    </div>


                    <div class="resume-item">
                        <h4>Student Ventures Program Lead</h4>
                        <a href="https://alueducation.com/" style="color: cadetblue;" target="_blank">
                            <p><em>African Leadership University, Rwanda</em></p>
                        </a>
                        <p><em>Jan 2019 - Dec 2020</em></p>
                        <!-- <ul>
                            <li>Developed numerous marketing programs.</li>
                            <li>Managed up to 5 projects </li>
                            <li>Recommended and consulted with clients on graphic design</li>
                            <li>Created 4+ design proposals a month for clients</li>
                        </ul> -->
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <h3 class="resume-title">Education</h3>
                    <div class="resume-item">
                        <h4>Master of Business Administration - MBA Finance</h4>
                        <p><em>Adventist University of Central Africa, Rwanda</em></p>
                        <p>Major: Finance</p>
                    </div>

                    <div class="resume-item">
                        <h4>Certified Public Accountancy</h4>
                        <p><em>Institute of Certified Public Accountants, Rwanda</em></p>
                        <p>Ongoing</p>
                    </div>

                    <div class="resume-item">
                        <h4>Bachelors in Business Administration, Accounting &amp; Finance</h4>
                        <p><em>University of Bamenda, Cameroon</em></p>
                        <p>Major: Accounting and Finance</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Resume Section -->

    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>
    <!-- Footer -->


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
</body>

</html>