<!-- Vote Status Percentage per year level (Admin) -->

<!DOCTYPE html>
<html lang="en">
<?php require '../php/db_connection.php' ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="assets/img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap4.5.2.css">
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.min.css">
    <!-- <script src="assets/js/a076d05399.js"></script> -->
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/jquery-3.5.1.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/countdown.js"></script>
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
                    <li><a href="front_ArchFolder_v8_0.html">Archive</a></li>
                    <li><a href="front_VsPercentage_v6_0.html">Vote Status</a></li>
                    <li><a href="front_Election_v5_0.html">Vote Result</a>
                        <ul>
                            <li><a href="front_Report_v10_0.html">Make Report</a></li>
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
                <a class="user" href="#"><img class="user-profile" src="assets/img/user.png"></a>
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
   
   <div class="Bvotestat">
        <p><b>VOTE STATUS</b></p>
    </div>
 <?php
    //===========================variables===========================
    $gr7 = 0;
    $gr7_voted = 0;
    $gr7_percent = 0; //to be used in display
    $gr8 = 0;
    $gr8_voted = 0;
    $gr8_percent = 0; //to be used in display
    $gr9 = 0;
    $gr9_voted = 0;
    $gr9_percent = 0; //to be used in display
    $gr10 = 0;
    $gr10_voted = 0;
    $gr10_percent = 0; //to be used in display
    $gr11 = 0;
    $gr11_voted = 0;
    $gr11_percent = 0; //to be used in display
    $gr12 = 0;
    $gr12_voted = 0;
    $gr12_percent = 0; //tp be used in display

    /*Database query for retrieving data of student and their status*/

    //============================for gr 7 ==========================
    $gr_7 = "SELECT * FROM student where grade_level = 7";
    if ($result = mysqli_query($conn, $gr_7)) {
        $gr7 = mysqli_num_rows($result);
        $gr_7a = "SELECT * FROM student where grade_level = 7 and voting_status = 1";
        if ($result1 = mysqli_query($conn, $gr_7a)) {
            $gr7_voted = mysqli_num_rows($result1);
        }
    }

    $gr7_percent = ($gr7_voted / $gr7) * 100;

    //=========================for grade 8============================

    $gr_8 = "SELECT * FROM student where grade_level = 8";
    if ($result = mysqli_query($conn, $gr_8)) {
        $gr8 = mysqli_num_rows($result);
        $gr_8a = "SELECT * FROM student where grade_level = 8 and voting_status = 1";
        if ($result1 = mysqli_query($conn, $gr_8a)) {
            $gr8_voted = mysqli_num_rows($result1);
        }
    }

    $gr8_percent = ($gr8_voted / $gr8) * 100;

    //========================for grade 9 ==============================
    $gr_9 = "SELECT * FROM student where grade_level = 9";
    if ($result = mysqli_query($conn, $gr_9)) {
        $gr9 = mysqli_num_rows($result);
        $gr_9a = "SELECT * FROM student where grade_level = 9 and voting_status = 1";
        if ($result1 = mysqli_query($conn, $gr_9a)) {
            $gr9_voted = mysqli_num_rows($result1);
        }
    }

    $gr9_percent = ($gr9_voted / $gr9) * 100;

    //============================for grade 10 ==========================

    $gr_10 = "SELECT * FROM student where grade_level = 10";
    if ($result = mysqli_query($conn, $gr_10)) {
        $gr10 = mysqli_num_rows($result);
        $gr_10a = "SELECT * FROM student where grade_level = 10 and voting_status = 1";
        if ($result1 = mysqli_query($conn, $gr_10a)) {
            $gr10_voted = mysqli_num_rows($result1);
        }
    }

    $gr10_percent = ($gr10_voted / $gr10) * 100;

    //========================for grade 11 ===============================
    $gr_11 = "SELECT * FROM student where grade_level = 11";
    if ($result = mysqli_query($conn, $gr_11)) {
        $gr11 = mysqli_num_rows($result);
        $gr_11a = "SELECT * FROM student where grade_level = 11 and voting_status = 1";
        if ($result1 = mysqli_query($conn, $gr_11a)) {
            $gr11_voted = mysqli_num_rows($result1);
        }
    }

    $gr11_percent = ($gr11_voted / $gr11) * 100;

    //========================for grade 12 ================================
    $gr_12 = "SELECT * FROM student where grade_level = 12";
    if ($result = mysqli_query($conn, $gr_12)) {
        $gr12 = mysqli_num_rows($result);
        $gr_12a = "SELECT * FROM student where grade_level = 12 and voting_status = 1";
        if ($result1 = mysqli_query($conn, $gr_12a)) {
            $gr12_voted = mysqli_num_rows($result1);
        }
    }

    $gr12_percent = ($gr12_voted / $gr12) * 100;

    //===================== ======end============================================
    ?>

    <div class="Bvcontainer">
        <div class="Bcard">
            <div class ="Bbox">
                <div class="Bpercent">
                    <!--<svg version="1.1" viewBox="0 0 500 500" preserveAspectRatio="xMinYMin meet">--> 
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>  
                        <circle cx="70" cy="70" r="70"></circle>   
                    </svg>
                    <div class="Bnumber">
                        <h2>90<span>%</span></h2>
                    </div>
                </div>
                <a href="front_Monitoring_v7_0.html"><b>GRADE 7</b></a>      
            </div>
        </div>
        <div class="Bcard">
            <div class ="Bbox">
                <div class="Bpercent">
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>  
                        <circle cx="70" cy="70" r="70"></circle>   
                    </svg>
                    <div class="Bnumber">
                        <h2>85<span>%</span></h2>
                    </div>
                </div>
                <a href="front_Monitoring_v7_1.html"><b>GRADE 8</b></a>     
            </div>
        </div>
        <div class="Bcard">
            <div class ="Bbox">
                <div class="Bpercent">
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>  
                        <circle cx="70" cy="70" r="70"></circle>   
                    </svg>
                    <div class="Bnumber">
                        <h2>25<span>%</span></h2>
                    </div>
                </div>
                <a href="front_Monitoring_v7_2.html"><b>GRADE 9</b></a>    
            </div>
        </div>
        <div class="Bcard">
            <div class ="Bbox">
                <div class="Bpercent">
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>  
                        <circle cx="70" cy="70" r="70"></circle>   
                    </svg>
                    <div class="Bnumber">
                        <h2>37<span>%</span></h2>
                    </div>
                </div>
                <a href="front_Monitoring_v7_3.html"><b>GRADE 10</b></a>   
            </div>
        </div>
        <div class="Bcard">
            <div class ="Bbox">
                <div class="Bpercent">
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>  
                        <circle cx="70" cy="70" r="70"></circle>   
                    </svg>
                    <div class="Bnumber">
                        <h2>100<span>%</span></h2>
                    </div>
                </div>
                <a href="front_Monitoring_v7_4.htmll"><b>GRADE 11</b></a>   
            </div>
        </div>
        <div class="Bcard">
            <div class ="Bbox">
                <div class="Bpercent">
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>  
                        <circle cx="70" cy="70" r="70"></circle>   
                    </svg>
                    <div class="Bnumber">
                        <h2>45<span>%</span></h2>
                    </div>
                </div>
                <a href="front_Monitoring_v7_5.html"><b>GRADE 12</b></a>    
            </div>
        </div>
        </div>
    </div>

    <div class="footer">
        <p class="footer-txt">BS COMPUTER SCIENCE 3A © 2021</p>
    </div>

    <script>
        $('.ADicon').click(function () {
            $('span').toggleClass("cancel");
        });
    </script>
</body>

</html>
