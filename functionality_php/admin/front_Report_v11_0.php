<!--ELECTION ARCHIVES FOLDERS (ADMIN)-->

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8">
        <link rel="icon" href="../../Admin/assets/img/BUHS LOGO.png" type="image/png">
        <link rel="stylesheet" type="text/css" href="../../Admin/assets/css/style.css">
        <link rel="stylesheet" href="../../Admin/assets/css/bootstrap4.5.2.css">
        <link rel="stylesheet" href="../../Admin/assets/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="../../Admin/assets/css/font-awesome.css">
        <link rel="stylesheet" href="../../Admin/assets/css/jquery.dataTables.min.css">
        <script src="../../Admin/assets/js/dataTables.bootstrap4.min.js"></script>
        <script src="../../Admin/assets/js/jquery-3.5.1.js"></script>
        <script src="../../Admin/assets/js/jquery.dataTables.min.js"></script>
        <script src="../../Admin/assets/js/countdown.js"></script>
        <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
        <title>BUCEILS Voting System</title>
    </head>

    <body>
        <?php
            include '../php/db_connection.php';                     // Connect database
            if ($conn->connect_error)                               // Check connection
                die("Connection failed: " . $conn->connect_error);
            include '../php/fetch_date.php';                        // Connect fetch_date
            include "navAdmin.php";                                 // Add the navBar

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
                        // echo " SEMI WIN ";
                        // TIE BREAKER
                        // if headadmin
                        if($_SESSION['admin_position'] == "Head Admin"){
                            // echo "{Pick one}";
                        }else{
                            // echo "{Can't pick}";
                        }
                        //else if ordinary admin
                    }else{
                        // echo "  SURE WIN  ";
                        insertToArchive($con);
                    }

                    // THEN, add to archive
                }else{
                    // echo "  -- Didn't Met Quota --  ";
                }
            }

        
    ?>

        <div class="Breport">
            <p><b>ELECTION RESULTS REPORT</b></p>
        </div>

        <?php
            // Count and store to Archive right after election
                if($current_date_time>$last_election_date)//change to automatically compute after election
                {
                    //----------GETS THE WINNER PER POSITION
                    //Count number of candidate_position
                        $result = mysqli_query($conn,"SELECT * FROM candidate_position");
                        $positionCount = mysqli_num_rows($result);

                    // Counts year-level and overall student
                        $queryPopulation=mysqli_query($conn, "SELECT sum(case when grade_level = '7' then 1 else 0 end) AS g7,
                                        sum(case when grade_level = '8' then 1 else 0 end) AS g8,
                                        sum(case when grade_level = '9' then 1 else 0 end) AS g9,
                                        sum(case when grade_level = '10' then 1 else 0 end) AS g10,
                                        sum(case when grade_level = '11' then 1 else 0 end) AS g11,
                                        sum(case when grade_level = '12' then 1 else 0 end) AS g12,
                                        count(student_id) AS totalPopulation FROM student");
                    // Stores year-level and overall student population
                        $res = mysqli_fetch_array($queryPopulation);

                    for($i=1; $i<=$positionCount; $i++)
                    {
                        // Count the highest vote per position
                            $rowSQL = mysqli_query($conn, "SELECT MAX(total_votes) AS tempWinner FROM candidate WHERE position_id = '$i'");
                            list($max) = mysqli_fetch_row($rowSQL);
                        // echo "$i = $max";

                        if($max>0)
                        {
                            $voteAllow=mysqli_fetch_array($result);
                            if($voteAllow['vote_allow']==1)
                            {// For non-representative positions
                                getWinners($conn, $res, '6', $i, $max);
                            }else{// For representative positions
                                // Get the candidate's year level
                                    $gradeQuery = mysqli_query($conn,"SELECT candidate.position_id, candidate.student_id, student.student_id, student.grade_level FROM candidate INNER JOIN student ON candidate.student_id = student.student_id WHERE candidate.position_id = '$i'");
                                    $gradeLevel=mysqli_fetch_array($gradeQuery);
                                getWinners($conn, $res, ($gradeLevel['grade_level'] - 7), $i, $max);
                            } //end if else
                        }
            ?>
                        <br>
            <?php
                    }//end for loop
                }
                else{
                    echo "Election is still ongoing\n";
                }

                // Free all query if everything is resolved
                    
            ?>
                

        <div class="Bbtn_post">
            <button onclick="parent.open('http://localhost/Monitoring-main/functionality_php/report/generate-pdf.php')" class="Bbtn_postresults scs-responsive"><b>DOWNLOAD PDF</b></button>
        </div>


        <!-- Space before footer -->
        <br><br><br><br><br><br><br><br>

        <script>
            $('.icon').click(function() {
                $('span').toggleClass("cancel");
            });
        </script>
    </body>
</html>