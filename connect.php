<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "her_poc";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

$mysqli->set_charset("utf8");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>