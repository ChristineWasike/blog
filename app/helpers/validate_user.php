<?php

function validateUser($user){

    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'username required');

    }

    if (empty($user['email'])){
        array_push($errors, 'email required');

    }

    if (empty($user['password'])){
        array_push($errors, 'password required');

    }

    if (empty($user['conf_password'])){
        array_push($errors, 'password confirmation required');
    }

    if ($user['conf_password'] != $user['password']){
        array_push($errors, 'passwords don\'t match');

    }

    $existingUser = selectOne('users', ['email'=> $user['email']]);
    if ($existingUser){
        array_push($errors, 'Email already exists');
    }

    return $errors;
}

function validateLogin($user){

    $errors = array();

    if (empty($user['username'])){
        array_push($errors, 'username required');

    }

    if (empty($user['password'])){
        array_push($errors, 'password required');

    }


    return $errors;
}
