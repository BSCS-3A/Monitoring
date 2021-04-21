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
    // Connect Election Results PDF
    // include '../report/generate-pdf.php';
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="../Admin/assets/img/buceils-logo.png" type="image/png">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="assets/js/countdown.js"></script>
    <title>BUCEILS Voting System</title>
</head>

<body>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo">
            <h2>BUCEILS HS</h2>
            <h3>ONLINE VOTING SYSTEM</h3>
        </div>
        <label for="btn" class="icon"><span class="fa fa-bars"></span></label>
        <input type="checkbox" id="btn">
        <ul>
            <li>
                <label for="btn-1" class="show">ACCOUNTS</label>
                <a href="#">ACCOUNTS</a>
                <input type="checkbox" id="btn-1">
                <ul>
                    <li><a href="#">Students</a></li>
                    <li><a href="#">Admin</a></li>
                </ul>
            </li>
            <li>
                <label for="btn-2" class="show">ELECTION</label>
                <a href="#">ELECTION</a>
                <input type="checkbox" id="btn-2">
                <ul>
                    <li><a href="front_ArchFolder_v8_0.php">Archive</a></li>
                    <li><a href="#">Vote Status</a></li>
                    <li><a href="#">Vote Result</a>
                        <ul>
                            <li><a href="#">Make Report</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Configuration</a>
                    
                </ul>
            </li>
            <li><a href="#">CANDIDATES</a></li>
            <li>
                <label for="btn-4" class="show">LOGS</label>
                <a href="#">LOGS</a>
                <input type="checkbox" id="btn-4">
                <ul>
                    <li><a href="#">Access Log</a></li>
                    <li><a href="#">Activity Log</a></li>
                    <li><a href="#">Vote Summary</a></li>
                </ul>
            </li>
            <li><a href="#">MESSAGES</a></li>
            <li>
                <label for="btn-5" class="show">Admin Name</label>
                <a class="user" href="#"><img class="user-profile" src="assets/img/user.png"></a>
                <input type="checkbox" id="btn-5">
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

        <div class="Barchives">
          <p><b>ELECTION RESULTS REPORT</b></p>
        </div>
        
        <?php
        //  Election Results Report (Admin)
        
          	//----------GETS THE WINNER PER POSITION
                //Count number of candidate_position
                    $result = mysqli_query($conn,"SELECT * FROM candidate_position");
                    $positionCount = mysqli_num_rows($result);
                    // echo "$positionCount";
                //Get highest vote per candidate_position
					for($i=1; $i<=$positionCount; $i++)
					{
						$rowSQL = mysqli_query($conn, "SELECT MAX(total_votes) AS tempWinner FROM candidate WHERE position_id = '$i'");
						list($max) = mysqli_fetch_row($rowSQL);
						echo "$i = $max;\n";
					}//end for loop

                //Store id of candidate with highest vote
					// $names[$i] = mysqli_fetch_row($rowSQL);
					// echo " = $names['total_votes'];\n";

            //----------CHECKS FOR TIE
                //If there is more than 1 highest vote per candidate_position
                //Prompt to pick
                //Store id of candidate votes given a +1
                //Update stored id of winning candidate

            //----------CHECKS IF WINNER MET MINIMUM VOTE QUOTA
                //At least 50% of all votes for non-representative positions
                    //If not, update stored id to zero or null
                //At least 50% of year-level votes for representative positions
                    //If not, update stored id to zero or null
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
            $('.icon').click(function () {
                $('span').toggleClass("cancel");
            });
        </script>
   </body>
    
</html>