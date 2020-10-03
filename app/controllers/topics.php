<?php

include(ROOT_PATH.'/app/database/db.php');

if(isset($_POST['add-topic'])){
    unset($_POST['add-topic']);
    $topic_id = createREcords('topics', $_POST);


}


