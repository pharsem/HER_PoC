<?php
$servername = "localhost";
$username = "petthar_her";
$password = "her12321";
$database = "petthar_her";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $database);

$mysqli->set_charset("utf8");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
?>