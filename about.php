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
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/about.css">
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/new_header.php") ?>

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
                            <a type="button" class="btn get-in-touch" href="contact.php">Get in
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


        <!-- ======= Start of Testimonials Section ======= -->
        <!-- <section id="testimonials">
            <h2 style="text-align: center;" class="header">Testimonials</h2>
            <div class="container carousel-container">
                <div id="carouselContent" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active text-center p-4">
                            <div class="card text-white bg-dark mb-3" id="tolu-card" style="max-width: 30rem;">
                                <div class="card-header">
                                    <div id="testimonial_card" class="row" style="padding-left: 1rem;">
                                        <img src="assets/img/chidi.jpeg" alt="Chidi"
                                            style="border-radius: 50%; height: 5rem; width: 5rem;">
                                        <p style="text-align: left; margin-left: 2rem; padding-top: .4rem;">Chidi
                                            Afulezi<br>Head Faculty, Product, Innovation and<br> Entrepreneurship</p>
                                        <h1 id="blockQuote" style="font-size: 5rem; margin-top: -1.5rem;">&rdquo;</h1>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        I am pleased to nominate Nji Mbitaownu as the Sales Executive Award.
                                        To be honest, I have never worked with a person who gives so much of
                                        attention to every detail he works on.
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="carousel-item text-center p-4">
                            <div class="card text-white bg-dark mb-3" id="tolu-card" style="max-width: 30rem;">
                                <div class="card-header">
                                    <div id="testimonial_card" class="row" style="padding-left: 1rem;">
                                        <img src="img/tolu.jpeg" alt="Tolu"
                                            style="border-radius: 50%; height: 5rem; width: 5rem;">
                                        <p style="text-align: left; margin-left: 2rem; padding-top: .4rem;">Tolu
                                            <br>Faculty, Entrepreneurial Leadership
                                        </p>
                                        <h1 id="blockQuote" style="font-size: 5rem; margin-top: -1.5rem;">&rdquo;</h1>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        It is in his willingness to work on difficult projects and tasks and
                                        see them completing has impressed everyone in the company over the years.
                                        His skills do not end with official work.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item text-center p-4">
                            <div class="card text-white bg-dark mb-3" id="tolu-card" style="max-width: 30rem;">
                                <div class="card-header">
                                    <div id="testimonial_card" class="row" style="padding-left: 1rem;">
                                        <img src="img/demi.jpeg" alt="Demi"
                                            style="border-radius: 50%; height: 5rem; width: 5rem;">
                                        <p style="text-align: left; margin-left: 2rem; padding-top: .4rem;">Demilade
                                            <br>Entrepreneurial Leadership Faculty
                                        </p>
                                        <h1 id="blockQuote" style="font-size: 5rem; margin-top: -1.5rem;">&rdquo;</h1>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        It is in his willingness to work on difficult projects and tasks and
                                        see them completing has impressed everyone in the company over the years.
                                        His skills do not end with official work.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item text-center p-4">
                            <div class="card text-white bg-dark mb-3" id="tolu-card" style="max-width: 30rem;">
                                <div class="card-header">
                                    <div id="testimonial_card" class="row" style="padding-left: 1rem;">
                                        <img src="img/david.jpeg" alt="David"
                                            style="border-radius: 50%; height: 5rem; width: 5rem;">
                                        <p style="text-align: left; margin-left: 2rem; padding-top: .4rem;">David
                                            <br>Global Challenges Facilitator
                                        </p>
                                        <h1 id="blockQuote" style="font-size: 5rem; margin-top: -1.5rem;">&rdquo;</h1>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">
                                        It is in his willingness to work on difficult projects and tasks and
                                        see them completing has impressed everyone in the company over the years.
                                        His skills do not end with official work.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselContent" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselContent" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section> -->
        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    </div>

    <!-- ======= End of Testimonials Section ======= -->

    <!-- Footer -->
    <footer class="page-footer font-small cyan darken-3">

        <!-- Footer Elements -->
        <div class="container">
            <div class="row">
                <!-- Grid column -->
                <div class="col-md-3 my-grid mx-auto text-center">

                    <!-- Links -->
                    <a href="about.php">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">About</h5>
                    </a>
                </div>
                <!-- Grid column -->
                <div class="col-md-3 my-grid mx-auto text-center">

                    <!-- Links -->
                    <a href="resume.php">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Resume</h5>
                    </a>
                </div>
                <!-- Grid column -->
                <div class="col-md-3 my-grid mx-auto text-center">

                    <!-- Links -->
                    <a href="blog.php">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Blog</h5>
                    </a>
                </div>
                <!-- Grid column -->
                <div class="col-md-3 my-grid mx-auto text-center">

                    <!-- Links -->
                    <a href="contact.php">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contact</h5>
                    </a>
                </div>
            </div>
            <!-- Grid row-->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12" style="text-align: center; margin-top:1rem;">
                    <div class="flex-center">
                        <!-- Facebook -->
                        <!-- <a href="" target="_blank"><img src="img/facebook.svg" alt="facebook"
                                class="social-media fb-ic"></a> -->

                        <!-- Twitter -->
                        <a href="https://twitter.com/njimmawah" target="_blank"><img src="assets/img/twitter.svg" alt="twitter" class="social-media tw-ic" id="twitter"></a>

                        <!--Linkedin -->
                        <a href="https://www.linkedin.com/in/nji-mbitaownu-mba-77768115b/" target="_blank"><img src="assets/img/linkedin.svg" alt="linkedin" class="social-media li-ic"></a>

                        <!--Instagram-->
                        <a href="https://www.instagram.com/njimmawah/" target="_blank"><img src="assets/img/instagram.svg" alt="instagram" class="social-media ins-ic"></a>
                        </a>
                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">
            <br>
            <p>Copyright &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script> <a href="https://www.linkedin.com/in/nji-mbitaownu-mba-77768115b/"> Nji
                    Mbitaownu</a><br> All Rights Reserved
            </p>
        </div>
        <!-- Copyright -->

    </footer>
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