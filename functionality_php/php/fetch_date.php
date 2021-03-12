<?php
    require 'db_connection.php';

    // Fetch latest data from the database
    $result = mysqli_query($conn, 'SELECT * FROM vote_event ORDER BY vote_event_id DESC LIMIT 1') or die('Invalid query: ' . mysqli_connect_error());

    $row = mysqli_fetch_assoc($result);

    // Set timezone
    date_default_timezone_set('Asia/Manila');

    $current_date_time = date('Y-m-d H:i:s');
    // $current_year = date('Y');

    $on_going = 0;

    if($current_date_time>=$row['start_date'] && $current_date_time<$row['end_date']){
        $on_going = 1;  // set flag to true
    }else{
        $on_going = 0;
    }

    mysqli_free_result($result);
?>