<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../config/Database.php';
  include_once '../models/Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate 
  $student = new Post($db);

  $result = $student->read();
  // Get row count
  $num = $result->rowCount();

  if($num > 0) {
    // Post array
    $students_arr = array();
    // $posts_arr['data'] = array();

    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
      extract($row);
      
      $post_student = array(
        'student_id' => $student_id,
        'fname' => $fname,
        'Mname' => $Mname,
        'lname' => $lname,
        'grade_level' => $grade_level,
        'voting_status' => $voting_status
      );

      // Push to "data"
      array_push($students_arr, $post_student);
    }

    // Turn to JSON & output
    echo json_encode($students_arr);

  } else {
    // No Posts
    echo json_encode(
      array('message' => 'No Students Found')
    );
  }
?>
