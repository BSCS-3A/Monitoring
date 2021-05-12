
<?php
    require 'connect.php'; // Remove this when compiling
    require 'vtValSan.php';
    $start_time = strtotime($sched['start_date']);
    $end_time = strtotime($sched['end_date']);
    $access_time = time();
    
    if(isValidUser($conn)){
        if(empty($sched)){
            errorMessage("No election has been scheduled");
            exit();
        }
        else{
                            
            if($access_time > $end_time){
                errorMessage("Election is already finished");
                exit();
            }
            else if($access_time < $start_time){
                errorMessage("Election has not yet started");
                exit();
            }
            else if($access_time >= $start_time && $access_time <= $end_time){
                errorMessage("Election  is still on-going");
                exit();
            }
        }
    }
    else{ // Invalid user; destroy session and return to login
        notifyAdmin("Warning: A user with invalid credentials attmpted to access the Election Page");
        session_unset();    // remove all session variables
        session_destroy();  // destroy session
        header("Location: ../index.php");
        exit();
    }
?>