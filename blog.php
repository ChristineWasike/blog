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
    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="img/shortcut_icon.png" type="image/x-icon">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Work Sans Link -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/blog.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="https://use.fontawesome.com/a34a6b47ba.js"></script>
    <title>Blog</title>
</head>

<body>
    <?php include(ROOT_PATH . "/app/includes/new_header.php") ?>

    <div class="container-fluid">
        <!-- Featured Article -->
        <div class="row">
            <div class="featured" style="background-image: url('<?php echo BASE_URL . '/assets/img/' . $posts[count($posts)-1]['image']; ?>'">
                <h3>
                    <?php echo $posts[count($posts)-1]['title'];?>
                </h3>
                <br>
            </div>
        </div>
        <!-- Featured Article -->
        <div class="row articles">
            <?php foreach ($posts as $post) : ?>
                <div class="col-sm-6 col-md-4 offset-md-1">
                    <div class="card bg-dark">
                        <div class="image" style="background-image: url('<?php echo BASE_URL . '/assets/img/' . $post['image']; ?>');"></div>
                        <div class="card-body ">
                            <h5 class="card-title"><a href="single.php?id=<?php echo $post['id'];?>"><?php echo $post['title']; ?></a></h5>
                            <p class="card-text"><?php echo html_entity_decode(substr($post['body'], 0, 150) . '...') ?></p>
                            <i class="fas fa-calendar-alt"><?php echo date('F j, Y', strtotime($post['created_at'])); ?></i><br>
                            <a href="single.php?id=<?php echo $post['id'];?>">Read more</a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>


        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="assets/js/new_scripts.js"></script>
</body>

</html>