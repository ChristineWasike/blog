<?php
require('connect.php');

function displayData($value){
    echo "<pre>", print_r($value, true), "<pre>";
}


function executeQuery($sql, $data){
    global $conn;
    $stmt= $conn->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $stmt->bind_param($types, ...$values);
    $stmt->execute();
    return $stmt;
}

function selectAll($table, $conditions = []){
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    } else {
        // return records that match conditions

        $index = 0;
        foreach ($conditions as $key => $value) {
            if ($index == 0) {
                $sql = $sql . " WHERE $key = ?";
            } else {
                $sql = $sql . " AND $key = ?";
            }
            $index++;
        }
        displayData($sql);
        $stmt = executeQuery($sql, $conditions);
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

}

function selectOne($table, $conditions){
    global $conn;
    $sql = "SELECT * FROM $table";
    // return records that match conditions

    $index = 0;
    foreach ($conditions as $key => $value) {
        if ($index == 0) {
            $sql = $sql . " WHERE $key = ?";
        } else {
            $sql = $sql . " AND $key = ?";
        }
        $index++;
    }

    // Promotes efficiency by preventing searching
    // through all records in the database
    $sql = $sql . " LIMIT 1";

    $stmt = executeQuery($sql, $conditions);
    return $stmt->get_result()->fetch_assoc();

}

$conditions = [
    'admin' => 1,
    'username' => 'NjiMbitaownu'
];

//$users = selectAll('users');

$specific_users = selectOne('users', $conditions);

displayData($specific_users);



