<!DOCTYPE html>
<html>
<?php
include '../php/db_connection.php';
?>

<head>
<!-- darleng kiss mo ako-->

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <link rel="icon" href="../../Admin/assets/img/BUHS LOGO.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/jpa/style.css">
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
<!--darleng kiss mo ko-->
<style type="text/css">
 #specSec {
  margin-bottom: 4rem;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

 #exe{ 
  display: flex;
  justify-content: center;
  align-items: center;
  flex-grow: 0;
  flex-shrink: 0;
  flex-basis: 49.75%;
  margin-bottom: .5%;  }

#exe:nth-last-child(n+5):first-child,
#exe:nth-last-child(n+5):first-child ~ *,

 #exe:nth-last-child(n+6):first-child,
 #exe:nth-last-child(n+6):first-child ~ * {

  flex-basis: 33%;
}


#exe:nth-child(5):last-child {
  margin-right: auto;
  margin-left: .5%;
} 





#exe {
  min-height: 300px;
  font: 0.9rem Arial;
}
#adesign {
    color:white;
    font-family: Roboto;
     font-size: 20px;
    float: right;
    margin-left: 15px;
     margin-top: 35px;
}
#adesign2digits {
    color:white;
    font-family: Roboto;
     font-size: 20px;
    float: right;
    margin-left: 5px;
     margin-top: 35px;
}
</style>
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
                    <li><a href="front_VsPercentage_v6_0.php">Vote Status</a></li>
                    <li><a href="front_Election_v5_0.php">Vote Result</a>
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


    <div class="Bvotestat">
        <p><b>VOTE STATUS</b></p>
    </div>
    <?php
      //====================variables==================
    $gr7 = 0;
    $gr7_voted = 0;
    $gr7_percent = 0;
    $gr8 = 0;
    $gr8_voted = 0;
    $gr8_percent = 0;
    $gr9 = 0;
    $gr9_voted = 0;
    $gr9_percent = 0;
    $gr10 = 0;
    $gr10_voted = 0;
    $gr10_percent = 0;
    $gr11 = 0;
    $gr11_voted = 0;
    $gr11_percent = 0;
    $gr12 = 0;
    $gr12_voted = 0;
    $gr12_percent = 0;

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
<div id="specSec">
  <div id="exe">
      <div class="progressbar" data-animate="false"><?php //ang gr7_percent sya yung gagamitin para sa bar, yung naga pakita kung ilang percent na
                                                                    ?>
                        <div class="circle" data-percent=<?php echo '' . $gr7_percent . ''; ?>>
                            <div></div>

                        </div>
                        
                        <a href='front_Vstat_v7_0.php?level=7' id="adesign">GRADE 7</b></a>
                        
                    </div>

  </div>
  <div id="exe">
   <div class="progressbar" data-animate="false"><?php //ang gr8_percent sya yung gagamitin para sa bar, yung naga pakita kung ilang percent na
                                                                    ?>
                        <div class="circle" data-percent=<?php echo '' . $gr8_percent . ''; ?>>
                            <div></div>

                        </div>
                        
                        <a href='front_Vstat_v7_0.php?level=8' id="adesign">GRADE 8</b></a>
                        
                    </div>
      
  </div>
  <div id="exe">
       <div class="progressbar" data-animate="false"><?php //ang gr9_percent sya yung gagamitin para sa bar, yung naga pakita kung ilang percent na
                                                                    ?>
                        <div class="circle" data-percent=<?php echo '' . $gr9_percent . ''; ?>>
                            <div></div>

                        </div>
                        
                        <a href='front_Vstat_v7_0.php?level=9' id="adesign">GRADE 9</b></a>
                        
                    </div>
  </div>
  <div id="exe">
       <div class="progressbar" data-animate="false"><?php //ang gr10_percent sya yung gagamitin para sa bar, yung naga pakita kung ilang percent na
                                                                    ?>
                        <div class="circle" data-percent=<?php echo '' . $gr10_percent . ''; ?>>
                            <div></div>

                        </div>
                        
                        <a href='front_Vstat_v7_0.php?level=10' id="adesign2digits">GRADE 10</b></a>
                        
                    </div>
  </div>
  <div id="exe">
       <div class="progressbar" data-animate="false"><?php //ang gr11_percent sya yung gagamitin para sa bar, yung naga pakita kung ilang percent na
                                                                    ?>
                        <div class="circle" data-percent=<?php echo '' . $gr11_percent . ''; ?>>
                            <div></div>

                        </div>
                        
                        <a href='front_Vstat_v7_0.php?level=11' id="adesign2digits">GRADE 11</b></a>
                        
                    </div>
  </div>
  <div id="exe">
       <div class="progressbar" data-animate="false"><?php //ang gr12_percent sya yung gagamitin para sa bar, yung naga pakita kung ilang percent na
                                                                    ?>
                        <div class="circle" data-percent=<?php echo '' . $gr12_percent . ''; ?>>
                            <div></div>

                        </div>
                        
                        <a href='front_Vstat_v7_0.php?level=12' id="adesign2digits">GRADE 12</b></a>
                        
                    </div>
  </div>
</div>





    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js'></script>
    <script src="assets/jpa/script.js ?v=<?php echo time(); ?>"></script>  
</body>
</html>
