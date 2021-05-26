<?php
include("../../path.php");
include(ROOT_PATH . "/app/controllers/posts.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog| Manage Post</title>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Work Sans Link -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/css/styles.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
</head>

<body>

    <!-- Admin Header -->
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php") ?>

    <!-- Admin Page Wrapper -->
    <div class="admin-wrapper">

        <!-- Left side bar -->
        <?php include(ROOT_PATH . "/app/includes/adminSideBar.php") ?>


        <!--  Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn btn-outline-info">Add a Post</a>
                <a href="index.php" class="btn btn-outline-info">Manage Posts</a>
            </div>

            <div class="content">
                <h2 class="page-title">Manage Posts</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                <table>
                    <thead>
                        <th></th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>

                        <?php foreach ($posts as $key => $post) : ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $post['title']; ?></td>
                                <td><?php echo $post['username']; ?></td>
                                <td><a href="edit.php?id=<?php echo $post['id']; ?>" id="edit">Edit</a></td>
                                <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" id="delete">Delete</a></td>

                                <?php if ($post['published']) : ?>
                                    <td><a href="edit.php?published=0&p_id=<?php echo $post['id']; ?>" id="unpublish">Unpublish</a></td>
                                <?php else : ?>
                                    <td><a href="edit.php?published=1&p_id=<?php echo $post['id']; ?>" id="publish">Publish</a></td>
                                <?php endif; ?>
                            </tr>
                        <?php endforeach; ?>



                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>

    <!-- JavaScript -->
    <script src="../../assets/js/scripts.js"></script>
</body>

</html>