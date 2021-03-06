<!--Election Archives Folders (Student)-->

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="assets/img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles_folder.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="assets/js/countdown.js"></script>
    <title>BUCEILS HS Online Voting System</title>
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
                <label for="btn-1" class="show">VOTE</label>
                <a class="topnav" href="#">VOTE</a>
            </li>
            <li>
                <label for="btn-2" class="show">ELECTION</label>
                <a class="topnav" href="#">ELECTION</a>
                <input type="checkbox" id="btn-2">
                <ul>
                    <li><a href="#" class="elec-text">ELECTION PROCESS</a></li>
                    <li><a href="front_Monitoring_v3_0.html ">ARCHIVE</a></li>
                    <li><a href="front_Monitoring_v1_1.html">RESULTS</a></li>
                </ul>
            </li>
            <li>
                <label for="btn-3" class="show">CANDIDATES</label>
                <a class="topnav" href="#">CANDIDATES</a>
            </li>
            <li>
                <label for="btn-4" class="show">CHAT US</label>
                <a class="topnav" href="#">CHAT US</a>
            </li>
            <li>
                <label for="btn-5" class="show">JUAN S. DELA CRUZ</label>
                <a class="user" href="#"><img class="user-profile" src="assets/img/user.png"></a>
                <input type="checkbox" id="btn-5">
                <ul>
                    <li><a href="#" class="elec-text">JUAN S. DELA CRUZ</a></li>
                    <li><a href="#">LOGOUT</a></li>
                </ul>
            </li>
        </ul>
        <!--end of list-->
    </nav>

    <div class="Barch">
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

    $result1 = mysqli_query($conn, "SELECT YEAR(start_date) AS year FROM vote_event;");

    while ($row1 = mysqli_fetch_array($result1)) {
        if (empty($row1['year'])) {
            echo "no content";
        } else {
            $year = $row1['year'];
            echo '<div class="items">';
            echo '<figure>';
            echo '<b><a href="front_ArcList_v4_0.php?year='.$year.'">';
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