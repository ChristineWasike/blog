<?php

include(ROOT_PATH . "/app/database/db.php");
include(ROOT_PATH . "/app/helpers/validate_topic.php");

$table = 'topics';

$errors = array();

$id = '';
$name = '';
$description = '';

$topics = selectAll($table);
// displayData($topics);

if (isset($_POST['add-topic'])) {
    $errors = validateTopic($_POST);
    if (count($errors) == 0) {
        unset($_POST['add-topic']);
        displayData($_POST);
        $topic_id = create($table, $_POST);
        $_SESSION['message'] = 'Topic successfully created';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/topics/index.php');
        exit();
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}

// Retrive a topic
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $topic = selectOne($table, ['id' => $id]);
    $id = $topic['id'];
    $name = $topic['name'];
    $description = $topic['description'];
}


// Delete a topic
if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table, $id);

    $_SESSION['message'] = 'Topic successfully deleted';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/admin/topics/index.php');
    exit();
}


// Update a topic
if (isset($_POST['update-btn'])) {
    $errors = validateTopic($_POST);
    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-btn'], $_POST['id']);
        $topic_id = update($table, $id, $_POST);

        $_SESSION['message'] = 'Topic successfully updated';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/admin/topics/index.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }
}
