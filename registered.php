<?php

include "connect.php";

ob_start();
session_start();

$class = $_GET['class'];

$sql = "SELECT students.student_id as student_id, students.firstname as firstname, students.lastname as lastname, 
        registration.time as time FROM registration INNER JOIN students ON registration.student_id = students.student_id 
        WHERE registration.class_id ='$class'";

$result = $mysqli->query($sql);

include "header.php";

$sql2 = "SELECT * from classes WHERE class_id='$class' LIMIT 1";
$result2 = $mysqli->query($sql2);
$classdetails = $result2->fetch_assoc();

?>
<div class="container">
    <div class="col-md-6 col-md-offset-3">
<?php
        echo "<h3>".$classdetails['class_name'].", ".$classdetails['class_time']."</h3>";

        if ($result->num_rows > 0) {
            echo "<table class='table table-striped'>
                    <tr>
                        <th>Student-ID</th>
                        <th>Navn</th>
                        <th>Tidspunkt registrert</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {

                echo "<tr>
                        <td>".$row["student_id"]."</td>
                        <td>".$row["firstname"]." ".$row["lastname"]."</td>
                        <td>".$row["time"]."</td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "0 studenter registrert";
        } ?>
    <p><a href="index.php">Tilbake</a> </p>

    </div>
</div>


<?php include "footer.php"; ?>


