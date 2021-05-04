<?php
    require 'db_connection.php';

    // Fetch latest data from the database
    $result = mysqli_query($conn, 'SELECT * FROM vote_event ORDER BY vote_event_id DESC LIMIT 1') or die('Invalid query: ' . mysqli_connect_error());

    $row = mysqli_fetch_assoc($result);

    date_default_timezone_set('Asia/Manila');

    $current_date_time = date('Y-m-d H:i:s');
    $vote_stat = 0;

    $o_file = fopen("../admin/post_result.txt", "r") or die("Unable to open file!");

    $postB = fgetc($o_file);
    
    fclose($o_file);

    mysqli_free_result($result);
?>
