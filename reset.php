<?php

include "connect.php";

ob_start();
session_start();

include "header.php";


$sql = "DELETE FROM registration"; ?>

<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <?php
        if ($mysqli->query($sql) === TRUE) {
            header("refresh:5;url=index.php");
            echo "<p class='bg-success'>Alle registreringer er nå slettet</p>";
            echo "Du vil bli sendt tilbake om 5 sekunder. Hvis ikke, trykk <a href='index.php'>her</a>.";

        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        } ?>
    </div>
</div>


<?php include "footer.php"; ?>
