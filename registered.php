<?php

include "connect.php";

ob_start();
session_start();

$class = $_GET['class'];

$sql = "SELECT students.student_id as student_id, students.firstname as firstname, students.lastname as lastname, 
        registration.time as time FROM registration INNER JOIN students ON registration.student_id = students.student_id 
        WHERE registration.class_id ='$class'";

$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<table>
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
    echo "0 results";
}


