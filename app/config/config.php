<?php
//Create config.php file and add the configuration code in it
$db['host'] = "127.0.0.1"; // Host name
$db['user'] = "root"; // Mysql username
$db['password'] = "12Neyzer"; // Mysql password
$db['name'] = "feria"; // Database name


// Create connection
$conn = mysqli_connect($db['host'], $db['user'], $db['password'], $db['name']);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}