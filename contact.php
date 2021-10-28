<?php
include("path.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nji Mbitaownu: Contact Me</title>
  <link rel="shortcut icon" href="assets/img/shortcut_icon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

  <!-- Open Sans Link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/contact.css">
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
        <li class="nav-item">
          <a class="nav-link" href="resume.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://blog.mbitaownu.com">Blog</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contact.php">Contact <span class="sr-only">(current)</span></a>
        </li>

      </ul>
    </div>
  </nav>


  <div class="container-fluid">
    <h2>Get in Touch</h2>
    <div class="row landing">
      <div class="form col-md-6">
        <form action="https://formspree.io/f/xjvjyjln" method="POST">
          <h4>Message Me</h4>
          <div class="form-group">
            <!-- <label for="fullName">Full Name</label> -->
            <input name="name" type="name" class="form-control" id="fullName" aria-describedby="nameHelp" placeholder="Full name">
          </div>
          <div class="form-group">
            <!-- <label for="exampleInputEmail1">Email address</label> -->
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <!-- <label for="message">Your message</label> -->
            <textarea name="message" class="form-control" id="message" rows="3" placeholder="Your message"></textarea>
          </div>
          <button type="submit" class="btn btn-dark" id="contact_button">Submit</button>
        </form>
      </div>


      <div class="col-md-6 full_details">
        <div class="contact_information">
          <h4>Contact Info</h4>
          <p>Always available to work if the right project<br>
            comes along. Feel free to contact me!</p>

          <div class="row contact-item">
            <div class="col-md-2 column-image">
              <img src="assets/img/programmer.png" alt="name">
            </div>
            <div class="col-md-8 column-description">
              <p>Name <br><span>Nji Mbitaownu</span></p>
            </div>
          </div>

          <div class="row contact-item">
            <div class="col-md-2 column-images">
              <img src="assets/img/placeholder.png" alt="name">
            </div>
            <div class="col-md-8 column-description">
              <p>Location <br><span>Kigali, Rwanda</span></p>
            </div>
          </div>

          <div class="row contact-item">
            <div class="col-md-2 column-images1">
              <img src="assets/img/email.png" alt="name">
            </div>
            <div class="col-md-8 column-description">
              <p>Email me <br><span>nji@mbitaownu.com</span></p>
            </div>
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