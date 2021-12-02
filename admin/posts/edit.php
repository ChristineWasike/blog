<?php
include("../../path.php");
include(ROOT_PATH . "/app/controllers/posts.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog| Edit Post</title>

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
                <h2 class="page-title">Edit Post</h2>
                <?php include(ROOT_PATH . "/app/helpers/form_errors.php"); ?>
                <form action="edit.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>" id="text_input">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $title ?>" id="text_input">
                    </div>

                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body"><?php echo $body ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <select name="topic_id" id="topic" class="form-control">
                            <option value=""></option>
                            <?php foreach ($topics as $key => $topic) : ?>
                                <?php if (!empty($topic_id) && $topic_id == $topic['id']) : ?>
                                    <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                <?php else : ?>
                                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name'] ?></option>
                                <?php endif; ?>

                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-check">
                        <?php if (empty($published) && $published == 0) : ?>
                            <input type="checkbox" class="form-check-input" name="published" id="publish">
                            <label for="publish" class="form-check-label">
                                Publish
                            </label>
                        <?php else : ?>
                            <input type="checkbox" checked class="form-check-input" name="published" id="publish">
                            <label for="publish" class="form-check-label">
                                Publish
                            </label>
                        <?php endif; ?>
                    </div>

                    <div class="button-submit">
                        <button type="submit" name="update-post" class="btn btn-primary">Done</button>
                    </div>
                </form>
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