<?php 

define("DB_HOST", "localhost");
define("DB_USER", "Baraka");
define("DB_PASS", "123456");
define("DB_NAME", "php_crash");

//create mysql connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check the connection
if($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}