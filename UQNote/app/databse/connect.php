<?php

$servername = "mysql-master";
$username = "root";
$password = "root";
$db_name = "notes";

// Create connection
$conn = new MySQLi($servername, $username, $password, $db_name);

if (!$conn){
    die('Datebase connect error! ' . mysqli_connect_errno());
} else{
    //echo "Good Work!";
}
