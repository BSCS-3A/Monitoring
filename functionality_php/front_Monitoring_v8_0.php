<?php

//  Election Archives Folders (Admin)

session_start();
include "db_connection.php";

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$result = mysqli_query($conn,"SELECT * FROM archive");

$i=0;
while($row = mysqli_fetch_array($result)) {
    echo $row["school_year"];
    echo "<br />";
}
?>
