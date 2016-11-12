<?php

include "connect.php";

ob_start();
session_start();

$class = $_GET['class'];

$sql = "INSERT INTO registration (student_id, class_id, time) VALUES ('".$_SESSION['username']."', '".$class."', NOW())";

if ($mysqli->query($sql) === TRUE) {
    header("refresh:5;url=index.php");
    echo "Du er nå registrert<br>";
    echo "Du vil bli sendt tilbake om 5 sekunder. Hvis ikke, trykk <a href='index.php'>her</a>.";

} else if ($mysqli->errno == 1062) {
    header("refresh:5;url=index.php");
    echo "Du er allerede registrert i denne forelesningen<br>";
    echo "Du vil bli sendt tilbake om 5 sekunder. Hvis ikke, trykk <a href='index.php'>her</a>.";

} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}