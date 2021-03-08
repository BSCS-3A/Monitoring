<?php

//  Election Archives Folders (Student)

session_start();
include "db_connection.php";

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$result1 = mysqli_query($conn,"SELECT YEAR(start_date) AS year FROM vote_event;");

  while($row1 = mysqli_fetch_array($result1)) {
    if(empty($row1['year'])){
      echo "no content";
  }
    else {
      include('folder.php');
    }
  }
?>