<!--ELECTION ARCHIVES FOLDERS (ADMIN)-->

<!DOCTYPE html>
<html>
<html>
<?php
    // Connect database
    include '../php/db_connection.php';
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Function to get quota
    function get_quota($total)
    {
        if ( $total > 0 ){
            return (int) ( ($total/2)+1 );
        } else {
            return 0;
        }
    } // end get_quota

    // Function to check tie
    function check_tie($con, $idNumber, $maxVotes)
    {
        $tieQuery = mysqli_query($con, "SELECT * FROM candidate WHERE position_id = '$idNumber' AND total_votes='$maxVotes'");
        return mysqli_num_rows($tieQuery);
    } // end check_quota
?>

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
    <!-- <script src="assets/js/a076d05399.js"></script> -->
    <script src="../../Admin/assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../Admin/assets/js/jquery-3.5.1.js"></script>
    <script src="../../Admin/assets/js/jquery.dataTables.min.js"></script>
    <script src="../../Admin/assets/js/countdown.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.8/js/dataTables.fixedHeader.min.js"></script>
    <title>BUCEILS Voting System</title>
</head>

<body>
    <nav>
        <input class="nav-toggle1" type="checkbox">
        <div class="aLogo">
            <h2 class="aLogo-txt1"><a href="adminDashboard.html">BUCEILS HS</a></h2>
            <h3 class="aLogo-txt2"><a href="adminDashboard.html">ONLINE VOTING SYSTEM</a></h3>
        </div>
        <label for="btn" class="ADicon"><span class="fa fa-bars"></span></label>
        <input class="nav-toggle2" type="checkbox" id="btn">
        <ul>
            <li>
                <label for="btn-1" class="Ashow">ACCOUNTS</label>
                <a href="#">ACCOUNTS</a>
                <input class="nav-toggle3" type="checkbox" id="btn-1">
                <ul>
                    <li><a href="#">Students</a></li>
                    <li><a href="#">Admin</a></li>
                </ul>
            </li>
            <li>
                <label for="btn-2" class="Ashow">ELECTION</label>
                <a href="#">ELECTION</a>
                <input class="nav-toggle4" type="checkbox" id="btn-2">
                <ul>
                    <li><a href="front_ArchFolder_v8_0.php">Archive</a></li>
                    <li><a href="front_VsPercentage_v6_1.php">Vote Status</a></li>
                    <li><a href="front_Election_v5_0">Vote Result</a>
                        <ul>
                            <li><a href="../../functionality_php/report/generate-pdf.php">Make Report</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Configuration</a>
                        <ul>
                            <li><a href="#">Scheduler</a></li>
                            <li><a href="#">Signatory</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="#">CANDIDATES</a></li>
            <li>
                <label for="btn-4" class="Ashow">LOGS</label>
                <a href="#">LOGS</a>
                <input class="nav-toggle5" type="checkbox" id="btn-4">
                <ul>
                    <li><a href="accessLogs-v2.0.html">Access Log</a></li>
                    <li><a href="#">Activity Log</a></li>
                    <li><a href="#">Vote Summary</a></li>
                </ul>
            </li>
            <li><a href="#">MESSAGES</a></li>
            <li>
                <label for="btn-5" class="Ashow">Admin Name</label>
                <a class="user" href="#"><img class="user-profile" src="../../Admin/assets/img/user.png"></a>
                <input class="nav-toggle6" type="checkbox" id="btn-5">
                <ul>
                    <li><a class="username" href="#">Admin Name</a></li>
                    <li class="logout">
                        <span class="fa fa-sign-out"></span><a href="#">LOGOUT</a></span>
                    </li>
                </ul>
            </li>
        </ul>
        <!--end of list-->
    </nav>

    <div class="Breport">
        <p><b>ELECTION RESULTS REPORT</b></p>
    </div>

    <?php
        //  Election Results Report (Admin)

            // Count and store to Archive right after election

            //----------GETS THE WINNER PER POSITION
                //Count number of candidate_position
                    $result = mysqli_query($conn,"SELECT * FROM candidate_position");
                    $positionCount = mysqli_num_rows($result);
                // echo "$positionCount";

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

                    if($max>0)
                    {
                        $voteAllow=mysqli_fetch_array($result);
                        if($voteAllow['vote_allow']==1)
                        {// For non-representative positions
                            if($max>=get_quota($res[6]))
                            {//At least 50% of whole population
                                if(check_tie($conn, $i, $max)>=2){
                                    // TIE BREAKER
                                }else{
                                    // 
                                }

                                // THEN, add to archive
                            }else{
                                // Didn't make it '
                            }
                        }else{// For representative positions
                            // Get the candidate's year level
                                $gradeQuery = mysqli_query($conn,"SELECT candidate.position_id, candidate.student_id, student.student_id, student.grade_level FROM candidate INNER JOIN student ON candidate.student_id = student.student_id WHERE candidate.position_id = '$i'");
                                $gradeLevel=mysqli_fetch_array($gradeQuery);
                                $gradeAddress = $gradeLevel['grade_level'] - 7;
                            if($max>=get_quota($res[$gradeAddress]))
                            {//At least 50% of whole population
                                if(check_tie($conn, $i, $max)>=2){
                                    // TIE BREAKER
                                }else{
                                    //win
                                }

                                // THEN, add to archive
                            }else{
                               // Not Win
                            }
                        } //end if else
                    }
        ?>
                    <br>
        <?php
                }//end for loop

                
        ?>

    <div class="Bbtn_post">
        <button onclick="parent.open('http://localhost/Monitoring-main/functionality_php/report/generate-pdf.php')" class="Bbtn_postresults scs-responsive"><b>DOWNLOAD PDF</b></button>
    </div>


    <!-- Space before footer -->
    <br><br><br><br><br><br><br><br>

    <div class="footer">
        <p class="footer-txt">BS COMPUTER SCIENCE 3A © 2021</p>
    </div>

    <script>
        $('.icon').click(function() {
            $('span').toggleClass("cancel");
        });
    </script>
</body>

</html>
