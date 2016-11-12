<?php

include "connect.php";

ob_start();
session_start();

$sql = "DELETE FROM registration";

if ($mysqli->query($sql) === TRUE) {
    header("refresh:5;url=index.php");
    echo "Alle registreringer er nå slettet<br>";
    echo "Du vil bli sendt tilbake om 5 sekunder. Hvis ikke, trykk <a href='index.php'>her</a>.";
    
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}