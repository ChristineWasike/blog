<?php
include("../../path.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog| Create a User</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Work Sans Link -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
</head>

<body>

<!-- Header -->
<?php include(ROOT_PATH . "/app/includes/adminHeader.php") ?>

<!-- Admin Page Wrapper -->
<div class="admin-wrapper">

    <!-- Left side bar -->
    <?php include(ROOT_PATH . "/app/includes/adminSideBar.php") ?>


    <!--  Admin Content-->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.php" class="btn btn-outline-info">Add a User</a>
            <a href="index.php" class="btn btn-outline-info">Manage Users</a>
        </div>

        <div class="content">
            <h2 class="page-title">Add a User</h2>

            <form action="create.php" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input required type="text" class="form-control" name="name" id="username">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input required type="email" class="form-control" name="email" id="email">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" type="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="role">User Type</label>
                    <select name="user_type" id="user_type" class="form-control">
                        <option value="Administrator">Administrator</option>
                        <option value="Developer">Developer</option>
                    </select>

                </div>

                <div class="button-submit">
                    <button type="submit" class="btn btn-primary">Done</button>
                </div>
            </form>
        </div>
    </div>

</div>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!-- JavaScript -->
<script src="../../assets/js/scripts.js"></script>
</body>

</html>