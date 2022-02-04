<?php
include("path.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="assets/img/shortcut_icon.png" type="image/x-icon">

    <!-- Bootstrap links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Development font -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

    <!-- Final font -->
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/cta.css">
    <title>Contact me</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
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
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://blog.mbitaownu.com">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <h2 id="heading">Get in touch</h2>
        </div>

        <div class="row">
            <div class="col-md-6 text-center" id="form">
                <form action="https://formspree.io/f/xjvjyjln" method="post">
                    <h4>Message me</h4>

                    <div class="row">
                        <div class="form-group col-md-6 mx-auto">
                            <input name="name" type="name" class="form-control" id="fullName" aria-describedby="nameHelp" placeholder="Full name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 mx-auto">
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 mx-auto">
                            <textarea name="message" class="form-control" id="message" rows="3" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark " id="contact_button">Submit</button>
                </form>

            </div>

            <div class="col-md-6" id="info">
                <h4>Contact info</h4>
                <p>Always available to work if the right project comes along.
                    <br> Feel free to contact me!
                </p>

                <div class="row">
                    <div class="col-md-1">
                        <div class="row float-right">
                           <img src="assets/img/new_user.png" alt="" srcset="">
                        </div>

                    </div>

                    <div class="col-md-4 ml-1">
                        <p>Name: <br><strong>Nji Mbitaownu</strong></p>

                    </div>

                </div>
                <div class="row">
                    <div class="col-md-1">
                    <div class="row float-right">
                           <img src="assets/img/location-pin.png" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-md-4 ml-1">
                        <p>Location: <br><strong>Kigali, Rwanda</strong></p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-1">
                    <div class="row float-right">
                           <img src="assets/img/mail.png" alt="" srcset="">
                        </div>
                    </div>
                    <div class="col-md-4 ml-1">
                        <p>Email: <br><strong>nji@mbitaownu.com</strong></p>
                    </div>

                </div>


            </div>
        </div>

    </div>

    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>
    <!-- Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>