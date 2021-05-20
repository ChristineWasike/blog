<? php ?>

<header>

    <a href="<?php echo BASE_URL . "/index.php" ?>" class="logo">
        <img src="assets/img/logo.png" alt="Logo">
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
                    <?php if ($_SESSION['admin']) : ?>
                        <li><a href="#" class="logout">Dashboard</a></li>
                    <?php endif; ?>
                    <li><a href="<?php echo BASE_URL . "/logout.php" ?>" class="logout">Logout</a></li>
                </ul>
            </li>
        <?php else : ?>
            <li><a href="<?php echo BASE_URL . "/register.php" ?>">Sign up</a></li>
            <li><a href="<?php echo BASE_URL . "/login.php" ?>">Login</a></li>
        <?php endif; ?>



    </ul>

</header>