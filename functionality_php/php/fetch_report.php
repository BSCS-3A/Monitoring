<?php
	// Function that returns election results status
		// function isResultFinal($status)
		// {
		// 	return $status;
		// }

	// Function to get quota
        function getQuota($total)
        {
            if ( $total > 0 )
                return (int) ( ($total/2)+1 );
            else 
                return 0;
        } // end getQuota

    // Function to get number of tied winning candidates per position
        function numTie($conn, $i, $max)
        {
            return mysqli_num_rows($conn->query("SELECT * FROM candidate WHERE position_id = '$i' AND total_votes='$max'"));
        } // end numTie

        function getTiedCandidates($conn, $i, $max, & $tiedCandidates){
        	$tieQuery = $conn->query("SELECT * FROM candidate WHERE position_id = '$i' AND total_votes='$max'");
        	for ($k=0; $k < numTie($conn, $i, $max); $k++) {
        		$tiedStudents= mysqli_fetch_array($tieQuery);
            	$tiedCandidates = $tiedCandidates." || candId = ".$tiedStudents['candidate_id']."";
            }
        }

    // Function to INSERT to archive
        function insertToArchive($conn,$winnerCandidates)
        {
        	for($n=0; $n<sizeof($winnerCandidates); $n++)
        	{
        		$conn->query("INSERT INTO `archive` (`archive_id`, `position_name`, `winner_fname`, `winner_mname`, `winner_lname`, `school_year`, `platform_info`) VALUES (NULL, 'cc', 'gd', 'ffss', 'iuf', CURRENT_DATE(), 'yef')");
        	}
        }

    // Function to get lists of tied candidates and winners
        function getLists($conn, $enrolled, $arrAdd, $i, $max, & $tiedCandidates, & $winnerCandidates)
        {
        	if($max>=getQuota($enrolled[$arrAdd]))
            {//At least 50% of whole population
                if(numTie($conn, $i, $max)>=2){
                    // $resultStatus = false;
                    getTiedCandidates($conn, $i, $max, $tiedCandidates);
	            }else{
	                $winnerStudents= mysqli_fetch_array($conn->query("SELECT * FROM candidate WHERE position_id = '$i' AND total_votes='$max'"));
		            array_push($winnerCandidates, (int)$winnerStudents['candidate_id']);

	            }
            }else{
                echo "  -- Didn't Met Quota --  ";
            }
        }

        function getGradeLevel($conn, $i)
        {
        	$gradeLevel=mysqli_fetch_array($conn->query("SELECT candidate.position_id, candidate.student_id, student.student_id, student.grade_level FROM candidate INNER JOIN student ON candidate.student_id = student.student_id WHERE candidate.position_id = '$i'"));
            return ($gradeLevel['grade_level'] - 7);
        }

    //Count number of candidate_position
        $result = mysqli_query($conn,"SELECT * FROM candidate_position");
        $positionSize = mysqli_num_rows($result);
?>