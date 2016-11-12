<?php

include "connect.php";

ob_start();
session_start();

include "header.php";

$class = $_GET['class'];

$sql = "INSERT INTO registration (student_id, class_id, time) VALUES ('".$_SESSION['username']."', '".$class."', NOW())";

?>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <?php

        if ($mysqli->query($sql) === TRUE) {
            header("refresh:5;url=index.php");
            echo "<p class='bg-success'>Du er nå registrert</p>";
            echo "Du vil bli sendt tilbake om 5 sekunder. Hvis ikke, trykk <a href='index.php'>her</a>.";

        } else if ($mysqli->errno == 1062) {
            header("refresh:5;url=index.php");
            echo "<p class='bg-danger'>Du er allerede registrert i denne forelesningen</p>";
            echo "Du vil bli sendt tilbake om 5 sekunder. Hvis ikke, trykk <a href='index.php'>her</a>.";

        } else {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        } ?>
    </div>
</div>


<?php include "footer.php"; ?>