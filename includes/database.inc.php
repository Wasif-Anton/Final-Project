<?php

// Creating a connection to our database
$server_name  = 'localhost';
$db_username = "root";
$db_password = '';
$db_name = 'final_project_db';

$conn = new mysqli($server_name, $db_username, $db_password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
