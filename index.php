<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = getPublishedPosts();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nji Mbitaownu</title>
    <link rel="shortcut icon" href="assets/img/shortcut_icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Newsreader&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

    <!-- Lora Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/my_header.php") ?>

    <!-- Start of Landing page -->
    <div class="container-fluid" id="main">
        <div class="row">
            <div class="landing">
                <div style="color: white;" class="col-md-6 ml-auto landing_content">
                    <div class="desc">
                        <h4 style="font-size: 2.0rem;">WELCOME</h4>
                        <h3 style="font-size: 2.3rem; font-weight: bold;">
                            I am Nji Mbitaownu</h3>
                        <p style="font-size: 1.2rem;">I'm an <span style="color:#CDA750;">Entrepreneurial Leader</span></p>
                        <p style="font-size: 1.2rem;">Are you looking to scale your startup or <br>
                            have an idea but don't know where to <br>
                            begin? Let me help you find your startup's <br>
                            market-fit and economic engine.</p>
                        <a type="button submit" class="btn learn-more" href="about.php">Learn More</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="experience">
                <div class="inner-experience text-center">
                    <h1 style="font-size: 2.5rem; font-weight: bold;">
                        With experience as Educator and Entrepreneur</h1>
                    <br>
                    <h2 style="font-size: 1.5rem; font-weight: bold; color: #CDA750;">I have worked with</h2>
                    <br>
                    <a href="https://www.instagram.com/njimmawah/" target="_blank"><img src="assets/img/new_instagram.svg" alt="instagram" class="social-media"></a>
                    <a href="https://www.instagram.com/njimmawah/" target="_blank"><img src="assets/img/new_instagram.svg" alt="instagram" class="social-media"></a>
                    <a href="https://www.instagram.com/njimmawah/" target="_blank"><img src="assets/img/new_instagram.svg" alt="instagram" class="social-media"></a>
                    <a href="https://www.instagram.com/njimmawah/" target="_blank"><img src="assets/img/new_instagram.svg" alt="instagram" class="social-media"></a>
                    <a href="https://www.instagram.com/njimmawah/" target="_blank"><img src="assets/img/new_instagram.svg" alt="instagram" class="social-media"></a>
                    <a href="https://www.instagram.com/njimmawah/" target="_blank"><img src="assets/img/new_instagram.svg" alt="instagram" class="social-media"></a>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="clients">
                <h1 class="text-center" style="font-size: 2.5rem; font-weight: bold;">What They Say</h1>
                <div class="container carousel-container">
                    <div id="carouselContent" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselContent" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselContent" data-slide-to="1"></li>
                            <li data-target="#carouselContent" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active text-center p-4">
                                <div class="card text-white bg-dark mb-3" id="chidi-card" style="max-width: 30rem;">
                                    <div class="card-header">
                                        <div id="testimonial_card" class="row" style="padding-left: 1rem;">
                                            <img src="assets/img/chidi.jpeg" alt="Chidi" style="border-radius: 50%; height: 5rem; width: 5rem;">
                                            <p style="text-align: left; margin-left: 2%; padding-top: .4rem;">Name
                                                <br>Organisation, Position
                                            </p>
                                            <h1 id="blockQuote" class="blockQuote" style="font-size: 5rem; padding-left:8%; margin-top: -1.5rem;">&rdquo;</h1>
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
                                            <img src="assets/img/tolu.jpeg" alt="Tolu" style="border-radius: 50%; height: 5rem; width: 5rem;">
                                            <p style="text-align: left; margin-left: 2%; padding-top: .4rem;">Name
                                                <br>Organisation, Position
                                            </p>
                                            <h1 id="blockQuote" class="blockQuote" style="font-size: 5rem; padding-left:8%; margin-top: -1.5rem;">&rdquo;</h1>
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
                                <div class="card text-white bg-dark mb-3" id="david-card" style="max-width: 30rem;">
                                    <div class="card-header">
                                        <div id="testimonial_card" class="row" style="padding-left: 1rem;">
                                            <img src="assets/img/david.jpeg" alt="David" style="border-radius: 50%; height: 5rem; width: 5rem;">
                                            <p style="text-align: left; margin-left: 2%; padding-top: .4rem;">Name
                                                <br>Organisation, Position
                                            </p>
                                            <h1 id="blockQuote" class="blockQuote" style="font-size: 5rem; padding-left:8%; margin-top: -1.5rem;">&rdquo;</h1>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Posts -->
        <div class="row">
            <div class="post_heading text-center">
                <h1 style="font-size: 2.5rem; font-weight: bold;">Recent Posts</h1>
                <br>
            </div>

            <div class="col-md-12 posts text-center">
                <div class="row">
                    <?php foreach ($posts as $post) : ?>
                        <?php $data = $array[$i]; ?>
                        <div class="col-sm-6 col-md-4 offset-md-1">
                            <div class="post_card card bg-dark">
                                <div class="image" style="background-image: url('<?php echo BASE_URL . '/assets/img/' . $post['image']; ?>');"></div>
                                <div class="card-body ">
                                    <h5 class="card-title"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h5>
                                    <p class="card-text"><?php echo html_entity_decode(substr($post['body'], 0, 150) . '...') ?></p>
                                    <i class="fas fa-calendar-alt"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i><br>
                                    <a href="single.php?id=<?php echo $post['id']; ?>">Read more</a>
                                </div>
                            </div>
                        </div>
                        <?php ++$i; ?>
                    <?php endforeach ?>
                </div>
                <a type="button submit" class="btn learn-more" href="blog.php">More Posts</a>
            </div>

        </div>

        <!-- Mailing List -->
        <div class="row">
            <div class="mailing text-center">
                <h1 style="font-size: 2.5rem; font-weight: bold;">
                    Join My Mailing List!</h1>
                <br>
                <h2 style="font-size:1rem; font-weight: bold; font-style: italic;">Subscribe to my newsletter to
                    receive entrepreneurial resources <br>
                    to help you build your startup.
                    <span style="color: #CDA750;">No Spam.</span>
                </h2>

                <br>

                <div class="form col-sm-6 col-md-4 offset-md-4">
                    <form action="https://formspree.io/f/xjvjyjln" method="POST">
                        <div class="form-group">
                            <!-- <label for="exampleInputEmail1">Email address</label> -->
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">All emails are kept private</small>
                        </div>

                        <a type="button submit" class="btn learn-more" href="about.php">Subscribe</a>
                    </form>
                </div>

            </div>
        </div>

        <!-- Have a project -->
        <div class="row">
            <div class="talk text-center">
                <h1 style="font-size: 2.5rem; font-weight: bold;">
                    Have a Project?</h1>
                <br>
                <a type="button submit" class="btn learn-more" href="contact.php">Let's Talk</a>
            </div>
        </div>




        <!-- End of Landing Page -->

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    </div>

    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>
    <!-- Footer -->

    <!-- Start of Landing page -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


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