<?php
// Using the MSQLI interface

$host = 'localhost';
$user = 'debian-sys-maint';
$password = '6APkPQHobtK9ydtw';
$db_name = 'blog';

$conn = new MySQLi($host, $user, $password, $db_name);

if($conn->connect_error){
    die('Database connection error: '. $conn->connect_error);
}