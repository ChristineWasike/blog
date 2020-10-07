<?php
include(ROOT_PATH. "/app/database/db.php");
include(ROOT_PATH. "/app/helpers/validate_user.php");

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
    } else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $conf_password = $_POST['conf_password'];
    }

}