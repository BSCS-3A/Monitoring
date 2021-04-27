<!--ELECTION RESULTS REPORT (ADMIN)-->
<!-- This file enables winners to be inserted to archive -->

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
            require '../php/db_connection.php';                     // Connect database
            if ($conn->connect_error)                               // Check connection
                die("Connection failed: " . $conn->connect_error);
            require '../php/fetch_date.php';                        // Fetches important datetime
            require '../php/student_count.php';                     // Counts student
            require '../php/fetch_report.php';                      // Contains necessary functions and query
            include "navAdmin.php";                                 // Adds the navBar and footer
        ?>

        <div class="Breport">
            <p><b>ELECTION RESULTS REPORT</b></p>
        </div>

        <?php
            // Count and store to Archive right after election
                if($current_date_time>$last_election_date)//change to automatically compute after election
                {
                    // $winnerCandidates = " WHERE 0";
                    $winnerCandidates = (array) null;
                    $tiedCandidates = " WHERE 0";

                    for($i=1; $i<=$positionSize; $i++)
                    {
                        // Count the highest vote per position
                            $rowSQL = mysqli_query($conn, "SELECT MAX(total_votes) AS tempWinner FROM candidate WHERE position_id = '$i'");
                            list($max) = mysqli_fetch_row($rowSQL);
                        echo "<br>$i = $max";

                        if($max>0)
                        {
                            $voteAllow=mysqli_fetch_array($result);
                            if($voteAllow['vote_allow']==1)
                            {// For non-representative positions
                                getLists($conn, $enrolled, '6', $i, $max, $tiedCandidates, $winnerCandidates);
                            }else{// For representative positions
                                getLists($conn, $enrolled, getGradeLevel($conn, $i), $i, $max, $tiedCandidates, $winnerCandidates);
                            } //end if else
                        }
                    }//end for loop

                    // if($resultStatus==false)
                    {    // if headadmin
                        if($_SESSION['admin_position'] == "Head Admin")
                        {
                            $queryString = "SELECT * FROM ((candidate INNER JOIN student ON candidate.student_id = student.student_id) INNER JOIN candidate_position ON candidate.position_id = candidate_position.position_id)".$tiedCandidates." ORDER BY candidate_position.hierarchy_id";
                            $tieTable = $conn->query($queryString);
                            echo "<br>$queryString";
                            // makeBallot($tieTable);
                            // after voting change to final
                        }else{ //ordinary admin
                            // display that election results is not yet final, call admin to finalize
                        }
                    }
                    // else{
                    insertToArchive($conn,$winnerCandidates);
                    for($n=0; $n<sizeof($winnerCandidates); $n++)
                    {
                        echo "<br><br>$winnerCandidates[$n]";
                    }
                        // store to archive if final
                    // }
                }
                else{
                    echo "Election is still ongoing\n";
                }       
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