<!-- Vote Status Percentage per year level (Admin) -->

<!DOCTYPE html>
<html lang="en">

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
