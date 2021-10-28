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

    <!-- Lora Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">


    <!-- Open Sans Link -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet"> -->

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" media="screen and (min-device-width: 1382px)" href="assets/css/about_1440px.css">
    <link rel="stylesheet" href="assets/css/about_1024px.css">
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
                    <a class="nav-link" href="https://blog.mbitaownu.com">Blog</a>
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
                    <img src="assets/img/about_me.png" alt="nji" id="about_image">
                </div>

                <!-- animate__animated animate__fadeInRight -->
                <div class="col-md-6 area-style description">
                    <div class="contents">
                        <h3>About me</h3>
                        <span style="color: #CDA750; font-weight: bold;">
                            <p>Who am I?</p>
                        </span>

                        <p style="font-weight: bold; letter-spacing: 2px;">
                            I’m Nji Mbitaownu, an Entrepreneurial <br>
                            Leader, Startup Strategist and <br>
                            Entrepreneurial Coach.
                        </p>
                        <p>I am an Entrepreneurial Leader and
                            ecosystem player passionate about helping
                            entrepreneurs and startups find their
                            market-fit and economic engines. I have
                            experience as an educator and as an
                            entrepreneur.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ======= End of About me Section ======= -->
        <section id="more-about">
            <div class="more-about">
                <p>As an educator, I work at the African Leadership University as Faculty in the
                    Entrepreneurship and International Business & Trade Programmes. My work with students
                    focuses on exposing and equipping them with entrepreneurial and finance competencies
                    and ways on how to leverage them for entrepreneurial success. I also wear the hat of the
                    Incubator Manager for ALU’s School of Wildlife Conservation, where I am in charge of
                    designing and implementing a conservation-focused incubator program for entrepreneurs
                    across Africa.</p>
                <p>Before being Faculty and Incubator Manager, I was the head of the Student Ventures
                    Programme, where I worked closely with student entrepreneurs to finetune their business
                    ideas and raise funds through entrepreneurial competitions and venture capitalists.</p>
                <p>Apart from my work with entrepreneurs and startups, I enjoy occasional good reads on
                    business, economics, development, and life, which I post as book reviews and summaries
                    on my Social Media and blog. As a result of my love for Jazz Music, I have also taken a fancy
                    towards learning how to play the saxophone.</p>
            </div>

        </section>

        <section id="resume-section">
            <div class="resume-section">
                <h2>Resume</h2>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 offset-1 categories" id="categories" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="resume-title">Most Recent Expereince</h3>
                            <div class="resume-item">
                                <h4>Incubator Manager</h4>
                                <a href="https://sowc.alueducation.com/" style="color: cadetblue;" target="_blank">
                                    <p><em>School of Wildlife Conservation - ALU, Rwanda</em></p>
                                </a>
                                <p>Feb 2021 - Present</p>
                                <hr>
                            </div>

                            <div class="resume-item">
                                <h4>Course Facilitator</h4>
                                <a href="https://alueducation.com/" style="color: cadetblue;" target="_blank">
                                    <p><em>African Leadership University, Rwanda</em></p>
                                </a>
                                <p><em>Jan 2020 - Present</em></p>
                                <hr>
                            </div>

                            <div class="resume-item">
                                <h4>Student Ventures Program Lead</h4>
                                <a href="https://alueducation.com/" style="color: cadetblue;" target="_blank">
                                    <p><em>African Leadership University, Rwanda</em></p>
                                </a>
                                <p><em>Jan 2019 - Dec 2020</em></p>
                            </div>
                        </div>
                        <div class="col-md-4 offset-1 categories" id="categories1" data-aos="fade-up">
                            <h3 class="resume-title">Education</h3>
                            <div class="resume-item">
                                <h4>Master of Business Administration</h4>
                                <p>Adventist University of Central Africa, Rwanda</p>
                                <p>Major: Finance</p>
                                <hr>
                            </div>

                            <div class="resume-item">
                                <h4>Certified Public Accountancy (CPA)</h4>
                                <p>Institute of Certified Public Accountants, Rwanda</p>
                                <p>Ongoing</p>
                                <hr>
                            </div>

                            <div class="resume-item">
                                <h4>Bachelors in Business Administration</h4>
                                <p>University of Bamenda, Cameroon</p>
                                <p>Major: Accounting and Finance</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="project-section">
            <!-- Have a project -->
            <div class="row">
                <div class="talk text-center">
                    <h1 style="font-size: 2.5rem; font-weight: bold;">
                        Have a Project?</h1>
                    <br>
                    <a type="button submit" class="btn learn-more" href="contact.php">Let's Talk</a>
                </div>
            </div>
        </section>

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    </div>


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