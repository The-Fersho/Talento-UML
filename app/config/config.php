<?php
//Create config.php file and add the configuration code in it
$db['host'] = "b9kbc36pgljg5xvalgov-mysql.services.clever-cloud.com"; // Host name
$db['user'] = "upov97yov4vuyeim"; // Mysql username
$db['password'] = "oxcwTgSLQ8ybU4vp4x3I"; // Mysql password
$db['name'] = "b9kbc36pgljg5xvalgov"; // Database name


// Create connection
$conn = mysqli_connect($db['host'], $db['user'], $db['password'], $db['name']);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}