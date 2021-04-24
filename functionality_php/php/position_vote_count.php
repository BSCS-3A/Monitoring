<?php
    require 'db_connection.php';   
    
    $query = "SELECT position_id, SUM(total_votes) as votes_per_position FROM candidate GROUP BY position_id ORDER BY position_id";

    $result = mysqli_query($conn, $query);
    
    $position_votes = array();
	  while($vote=mysqli_fetch_array($result)){
      $position_votes[] = array( 
        "position_id"=>$vote['position_id'],
        "votes_per_position"=>$vote['votes_per_position']
      );
    }
?>
