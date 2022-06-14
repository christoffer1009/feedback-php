<?php

use FTP\Connection;

define('DB_HOST', '');
define('DB_USER', '');
define('DB_NAME', '');
define('DB_PASS', '');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if($conn->connect_error){
    die('Connection Failed'. $conn->connect_error);
}

echo 'Connected!'
?>