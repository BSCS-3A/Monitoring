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

    <link rel="stylesheet" type="text/css" href="assets/css/styles_folder.css">

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

    <div class="Barchives">
        <p><b>ELECTION ARCHIVES</b></p>
    </div>

    <?php
    //  Election Archives Folders (Admin)
    require "../php/db_connection.php";
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    //echo "Connected successfully";

    $result1 = mysqli_query($conn, "SELECT YEAR(start_date) AS year 
    FROM vote_event
    ORDER BY vote_event_id;"
    );

    while ($row1 = mysqli_fetch_array($result1)) {
        if (empty($row1['year'])) {
            echo "no content";
        } else {
            $year = $row1['year'];
            echo '<div class="items">';
            echo '<figure>';
            echo '<b><a href="front_ArchList_v9_0.php?year='.$year.'">';
            echo '<img src="assets/img/folder.png" width="140px" height="140px">';
            echo '<figcaption>'.$year.'</figcaption>';
            echo '</a></b>';
            echo '</figure>';
            echo '</div>';
        }
    }
    ?>

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