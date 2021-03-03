<?php
// Election Archives Folders (Student)

session_start();
include "db_connection.php";

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$result1 = mysqli_query($conn,"SELECT * FROM archive");
$result2 = mysqli_query($conn,"SELECT * FROM archive INNER JOIN candidate_position ON archive.position_id = candidate_position.position_id");


$i=0;
while($row = mysqli_fetch_array($result1)) {
    echo $row["winners_name"];
    echo "<br />";
    echo $row["school_year"];
    echo "<br />";
}

while($row2 = mysqli_fetch_array($result2)) {
    echo $row2["position_name"];
    echo "<br />";
}
?>