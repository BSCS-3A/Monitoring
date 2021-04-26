<?php
	// Function to get quota
        function getQuota($total)
        {
            if ( $total > 0 ){
                return (int) ( ($total/2)+1 );
            } else {
                return 0;
            }
        } // end getQuota

    // Function to check tie
        function checkTie($con, $idNumber, $maxVotes)
        {
            $tieQuery = mysqli_query($con, "SELECT * FROM candidate WHERE position_id = '$idNumber' AND total_votes='$maxVotes'");
            return mysqli_num_rows($tieQuery);
        } // end checkTie

    // Function to INSERT to archive
        function insertToArchive($con)
        {
            $con->query("INSERT INTO `archive` (`archive_id`, `position_name`, `winner_fname`, `winner_mname`, `winner_lname`, `school_year`, `platform_info`) VALUES (NULL, 'cc', 'gd', 'ffss', 'iuf', CURRENT_DATE(), 'yef')");
        }

    // Function to get winners
        function getWinners($con, $res, $arrAdd, $count, $maxVt)
        {
            if($maxVt>=getQuota($res[$arrAdd]))
            {//At least 50% of whole population
                if(checkTie($con, $count, $maxVt)>=2){
                    echo " SEMI WIN ";
                    // TIE BREAKER
                    // if headadmin
                    if($_SESSION['admin_position'] == "Head Admin"){
                        echo "{Pick one}";
                    }else{
                        echo "{Can't pick}";
                    }
                    //else if ordinary admin
	            }else{
	                echo "  SURE WIN  ";
	                insertToArchive($con);
	            }

                // THEN, add to archive
            }else{
                echo "  -- Didn't Met Quota --  ";
            }
        }

        function getGradeLevel($con, $id)
        {
        	$gradeQuery = mysqli_query($con,"SELECT candidate.position_id, candidate.student_id, student.student_id, student.grade_level FROM candidate INNER JOIN student ON candidate.student_id = student.student_id WHERE candidate.position_id = '$id'");
            $gradeLevel=mysqli_fetch_array($gradeQuery);
            return ($gradeLevel['grade_level'] - 7);
        }

    //Count number of candidate_position
        $result = mysqli_query($conn,"SELECT * FROM candidate_position");
        $positionSize = mysqli_num_rows($result);

?>