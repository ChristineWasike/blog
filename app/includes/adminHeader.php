<?php ?>

<header class="sticky-top">

    <a href="<?php echo BASE_URL . "/index.php" ?>" class="logo">
        <img src="../../assets/img/new_logo.png" alt="Logo">
    
    </a>
    <i id="menu" class="fa fa-bars menu-toggle fa-2x"></i>

    <ul class="nav">
        <?php if (isset($_SESSION['id'])) : ?>
            <li>
                <a id="user" href="#">
                    <i class="fa fa-user" style="font-size: large; color: white;"></i>
                    <?php echo $_SESSION['username'] ?>
                    <i class="fa fa-chevron-down" style="font-size: .8em; color: white;"></i>
                </a>

                <ul>
                    <li><a href="<?php echo BASE_URL . '/logout.php';?>" class="logout">Logout</a></li>
                </ul>
            </li>
        <?php endif; ?>
    </ul>

</header>