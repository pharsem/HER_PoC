<?php

$sql = "SELECT class_id, class_name, class_time FROM classes";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='table table-striped'>
            <tr>
                <th>Tidspunkt</th>
                <th>Forelesning</th>
                <th>Registrer</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>".$row["class_time"]."</td>
                <td>".$row["class_name"]."</td>
                <td><a href='register.php?class=".$row["class_id"]."'>Registrer</a></td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}