<?php

$sql = "SELECT class_id, class_name, class_time FROM classes";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Tidspunkt</th><th>Forelesning</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["class_time"]."</td><td>".$row["class_name"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}