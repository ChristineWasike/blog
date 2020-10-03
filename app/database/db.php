<?php
require ('connect.php');

function displayData($value){
    echo "<pre>", print_r($value, true), "<pre>";
}

function selectAll($table, $conditions = []){
    global $conn;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)){
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    } else{
        // return records that match conditions

        $index = 0;
        foreach ($conditions as $key => $value){
            if ($index == 0){
                $sql = $sql . " WHERE $key = ?";
            } else {
                $sql = $sql . " AND $key = ?";
            }
            $index ++;
        }
        displayData($sql);
        $stmt = $conn->prepare($sql);
        $values = array_values($conditions);
        $types = str_repeat('s', count($values));
        $stmt->bind_param($types, ...$values);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }

}

$conditions = [
    'admin' => 1,
    'username' => 'NjiMbitaownu'
];

$users = selectAll('users');

$specific_users = selectAll('users', $conditions);

displayData($specific_users);



