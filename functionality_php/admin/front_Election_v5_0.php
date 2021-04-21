<?php
// Election (Admin)
session_start();
include "../php/db_connection.php";

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$result = mysqli_query($conn, "SELECT * FROM candidate_position");

$i = 0;
while ($row = mysqli_fetch_array($result)) {
  echo $row["position_name"];
  echo "<br />";
}
?>
<!-- ELECTION (ADMIN) -->

<!DOCTYPE html>
<html lang="en">

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

  <div class="Belecstat">
    <p><b>ELECTION</b></p>
  </div>

  <div class="Belection_container">
    <div class="Bposition1">
      <h1><b>President</b></h1>
      <div class="Bbar1">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:100%">
            <b><span>100%</span></b>
          </div>
        </div>
      </div>
      <div class="Bbar2">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:0%">
            <b><span>0%</span></b>
          </div>
        </div>
      </div>
    </div>
    <div class="Bposition2">
      <h1><b>Vice-President</b></h1>
      <div class="Bbar1">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:75%">
            <b><span>75%</span></b>
          </div>
        </div>
      </div>
      <div class="Bbar2">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:15%">
            <b><span>15%</span></b>
          </div>
        </div>
      </div>
    </div>
    <div class="Bposition3">
      <h1><b>Secretary</b></h1>
      <div class="Bbar1">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:75%">
            <b><span>75%</span></b>
          </div>
        </div>
      </div>
      <div class="Bbar2">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:15%">
            <b><span>15%</span></b>
          </div>
        </div>
      </div>
    </div>
    <div class="Bposition3">
      <h1><b>Treasurer</b></h1>
      <div class="Bbar1">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:75%">
            <b><span>75%</span></b>
          </div>
        </div>
      </div>
      <div class="Bbar2">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:15%">
            <b><span>15%</span></b>
          </div>
        </div>
      </div>
    </div>
    <div class="Bposition3">
      <h1><b>Auditor</b></h1>
      <div class="Bbar1">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:75%">
            <b><span>75%</span></b>
          </div>
        </div>
      </div>
      <div class="Bbar2">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:15%">
            <b><span>15%</span></b>
          </div>
        </div>
      </div>
    </div>
    <div class="Bposition3">
      <h1><b>Grade 7 Representative</b></h1>
      <div class="Bbar1">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:75%">
            <b><span>75%</span></b>
          </div>
        </div>
      </div>
      <div class="Bbar2">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:15%">
            <b><span>15%</span></b>
          </div>
        </div>
      </div>
    </div>
    <div class="Bposition3">
      <h1><b>Grade 8 Representative</b></h1>
      <div class="Bbar1">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:75%">
            <b><span>75%</span></b>
          </div>
        </div>
      </div>
      <div class="Bbar2">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:15%">
            <b><span>15%</span></b>
          </div>
        </div>
      </div>
    </div>
    <div class="Bposition3">
      <h1><b>Grade 9 Representative</b></h1>
      <div class="Bbar1">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:75%">
            <b><span>75%</span></b>
          </div>
        </div>
      </div>
      <div class="Bbar2">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:15%">
            <b><span>15%</span></b>
          </div>
        </div>
      </div>
    </div>
    <div class="Bposition3">
      <h1><b>Grade 10 Representative</b></h1>
      <div class="Bbar1">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:75%">
            <b><span>75%</span></b>
          </div>
        </div>
      </div>
      <div class="Bbar2">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:15%">
            <b><span>15%</span></b>
          </div>
        </div>
      </div>
    </div>
    <div class="Bposition3">
      <h1><b>Grade 11 Representative</b></h1>
      <div class="Bbar1">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:75%">
            <b><span>75%</span></b>
          </div>
        </div>
      </div>
      <div class="Bbar2">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:15%">
            <b><span>15%</span></b>
          </div>
        </div>
      </div>
    </div>
    <div class="Bposition3">
      <h1><b>Grade 12 Representative</b></h1>
      <div class="Bbar1">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:75%">
            <b><span>75%</span></b>
          </div>
        </div>
      </div>
      <div class="Bbar2">
        <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
        <div class="Bvote_percentage">
          <div class="Bvote_level" style="width:15%">
            <b><span>15%</span></b>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="Bbtn_post">
     <button onclick="" name="button1" class="Bbtn_postresults scs-responsive"><b>POST RESULTS</b></button>
    </div> -->

  <div class="Bbtn_reset">
    <button onclick="" name='button2' class="Bbtn_resetresults scs-responsive"><b>RESET ELECTION</b></button>
  </div>

  <div class="Bbtn_post">
    <form action="../php/fetch_date.php" method="post" formtarget='#'>
      <!-- <button type="submit">Submit</button> -->
      <button type="button" formmethod="post" target="#" name='post_button'>Submit using POST</button>
    </form>
  </div>

  <br>
  <br>
  <br>
  <br>
  <br>


  <div class="footer">
    <p class="footer-txt">BS COMPUTER SCIENCE 3A © 2021</p>
  </div>

  <script>
    $('.ADicon').click(function() {
      $('span').toggleClass("cancel");
    });
  </script>
</body>

</html>