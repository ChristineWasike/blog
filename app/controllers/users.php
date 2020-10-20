<?php

include(ROOT_PATH. "/app/database/db.php");
include(ROOT_PATH. "/app/helpers/validate_user.php");

$errors = array();
$username = '';
$email = '';
$password = '';
$conf_password = '';


if (isset($_POST['register-btn'])) {
    $errors = validateUser($_POST);
    if (count($errors) == 0){
        unset($_POST['register-btn'], $_POST['conf_password']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $user_id = create('users', $_POST);
        $user = selectOne('users',['id' => $user_id]);

        displayData($user);

        //log user in
        // The information to be stored in the session
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'You are now logged in';
        $_SESSION['type'] = 'success';

        if ($_SESSION['admin']) {
            header('location: '. BASE_URL.'/admin/posts/index.php');
        } else {
            header('location: '. BASE_URL.'/index.php');
        }
        
        
        exit();

    } else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conf_password = $_POST['conf_password'];
    }

}