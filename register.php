<?php include("path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Work Sans Link -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/styles.css?version=51">
    <link rel="stylesheet" href="assets/css/admin.css?version=51">
</head>

<body>

<!-- Header -->
<?php include(ROOT_PATH . "/app/includes/header.php");?>

<!-- Page Wrapper -->
<div class="admin-wrapper">

    <!-- Content-->
    <div class="admin-content">
        <div class="content">
            <h2 class="page-title">Register</h2>

            <form action="register.php" method="POST" class= "col-md-6 offset-3">
                <?php include(ROOT_PATH . "/app/helpers/form_errors.php");?>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" value= "<?php echo $username;?>" id="username">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" value= "<?php echo $email;?>" id="email" >
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" value= "<?php echo $password;?>" id="password" >
                </div>

                <div class="form-group">
                    <label for="conf_password">Confirm Password</label>
                    <input type="password" class="form-control" name="conf_password" value= "<?php echo $conf_password;?>" id="password" >
                </div>

                <div class="button-submit">
                    <button type="submit" name = "register-btn" class="btn btn-primary">Register</button>
                </div>

                <p style="text-align: center;">Or <a href="login.php">Login</a></p>
            </form>
        </div>
    </div>

</div>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- Ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

<!-- JavaScript -->
<script src="../../assets/js/scripts.js"></script>
</body>

</html>
