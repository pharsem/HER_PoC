<?php

$sql = "SELECT class_id, class_name, class_time FROM classes";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-striped'>
            <tr>
                <th>Tidspunkt</th>
                <th>Forelesning</th>
                <th>Studenter</th>
            </tr>";
    while($row = $result->fetch_assoc()) {

        $sql2 = "SELECT * FROM registration WHERE class_id = '".$row["class_id"]."'";
        $rowcount = mysqli_num_rows($mysqli->query($sql2));

        echo "<tr>
                <td>".$row["class_time"]."</td>
                <td>".$row["class_name"]."</td>
                <td><a href='registered.php?class=".$row["class_id"]."'>".$rowcount." student(er) registrert</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>

<p><a href="reset.php">Nullstill alle registreringer</a> </p>
