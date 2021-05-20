<?php

function validatePost($post){

    $errors = array();

    if (empty($post['title'])){
        array_push($errors, 'title required');

    }

    if (empty($post['body'])){
        array_push($errors, 'body required');

    }

    if (empty($post['topic_id'])){
        array_push($errors, 'Please select a topic');

    }


    $existingPost = selectOne('posts', ['title'=> $$post['title']]);
    if ($existingPost){
        array_push($errors, 'Post with that title already exists');
    }

    return $errors;
}
