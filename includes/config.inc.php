<?php
// error report visable
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'project1175');
define('DB_PASSWORD', '#1Geheim!');
define('DB_DATABASE', 'project1175');
$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if (!$conn) {
    echo "FOUT: geen connectie naar database. <br>";
    echo "Errno " . mysqli_connect_errno() . "<br>";
    echo "Error " . mysqli_connect_error() . "<br>";
    exit;
}