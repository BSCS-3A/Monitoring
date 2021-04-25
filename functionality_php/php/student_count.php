<?php
    require 'db_connection.php';
    require 'fetch_candidates.php';    
    
    $query = "SELECT grade_level, COUNT(*) as students_voted FROM student GROUP BY grade_level";

    $result = mysqli_query($conn, $query);
    
    $records = array();
	  while($record=mysqli_fetch_array($result)){
      $records[] = array( 
        "grade_level"=>$record['grade_level'],
        "students_voted"=>$record['students_voted']
      );
	  }
    
    $total_students = 0;
    foreach($records as $record){
        if($record['grade_level']==7){
            $total_grade7 = $record['students_voted'];
        }
        if($record['grade_level']==8){
            $total_grade8 = $record['students_voted'];
        }
        if($record['grade_level']==9){
            $total_grade9 = $record['students_voted'];
        }
        if($record['grade_level']==10){
            $total_grade10 = $record['students_voted'];
        }
        if($record['grade_level']==11){
            $total_grade11 = $record['students_voted'];
        }
        if($record['grade_level']==12){
            $total_grade12 = $record['students_voted'];
        }

        $total_students += $record['students_voted'];
    }

?>
