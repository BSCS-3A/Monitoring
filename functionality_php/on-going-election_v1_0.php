<?php
session_start();
include "db_conn.php";

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="icon" href="assets/img/buceils-logo.png" type="image/png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="assets/js/script.js"></script>
    <title> BUCEILS Voting System </title>
</head>

<body>
    <nav>
        <img class="logo-pic" src="assets/img/buceils-logo.png">
        <div class="logo">
            <h2>BUCEILS HS</h2>
            <h3>ONLINE VOTING SYSTEM</h3>
        </div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li>
                <a href="#">ACCOUNTS</a>
                <input type="checkbox" id="btn-1">
                <ul>
                    <li><a href="#">Students</a></li>
                    <li><a href="#">Admin</a></li>
                </ul>
            </li>
            <li>
                <!-- <label for="btn-1" class="show">Features +</label> -->
                <a href="Front.html">ELECTION</a>
                <input type="checkbox" id="btn-1">
                <ul>
                    <li><a href="Front_v3_0.html">Archive</a></li>
                    <li><a href="Front_v2_0.html">Vote Status</a></li>
                    <li><a href="Front_v1_0.html">Vote Result</a>
                        <ul>
                            <li><a href="Front_v4_0.html">Make Report</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Configuration</a>
                    
                </ul>
            </li>
            <li>
                <!-- <label for="btn-2" class="show">Services +</label> -->
                <a href="#">CANDIDATES</a>
                <input type="checkbox" id="btn-2">
                <ul>
                    <li><a href="#">Update Info</a></li>
                    <li><a href="#">Positions</a></li>
                    <li>
                        <!-- <label for="btn-3" class="show">More +</label> -->
                        <a href="#">More <span class="fa fa-plus"></span></a>
                        <input type="checkbox" id="btn-3">
                        <ul>
                            <li><a href="#">Submenu-1</a></li>
                            <li><a href="#">Submenu-2</a></li>
                            <li><a href="#">Submenu-3</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">LOGS</a>
                <input type="checkbox" id="btn-4">
                <ul>
                    <li><a href="#">Access Log</a></li>
                    <li><a href="#">Activity Log</a></li>
                    <li><a href="#">Vote Summary</a></li>
                </ul>
            </li>
            <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">MESSAGES</a></li>
            <!-- <li><a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">LOGOUT</a></li> -->
            <li>
                <a class="user" href="#"><img class="user-profile" src="assets/img/user.png"></a>
                <ul>
                    <li><a class="username" href="#">Admin</a></li>
                    <li><a href="#">LOGOUT</a></li>
                </ul>
            </li>
        </ul>
        <!--end of list-->
    </nav>

    <div class="elecstat">
        <p><b>ON-GOING ELECTION</b></p>
    </div>

    <!-- DB CONNECT -->
    <?php
    $sql = "SELECT position_name FROM MyGuests";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          echo "Position" . $row["position_name"].;
        }
      } else {
        echo "0 results";
      }
    $conn->close()

    <section class= "bar-graph-one">
    <div class="position1">
        <h1><b>Position 1</b></h1>
        <div class ="bar1">
            <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
            <div class="vote_percentage">
                <div class="vote_level" style="width:75%"></div>
            </div>
        </div>
        <div class ="bar2">
            <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
            <div class="vote_percentage">
                <div class="vote_level" style="width:15%"></div>
            </div>
        </div>
    </div>
    </section>

    <section class= "bar-graph-two">
        <div class="position2">
            <h1><b>Position 2</b></h1>
            <div class ="bar1">
                <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                <div class="vote_percentage">
                    <div class="vote_level" style="width:75%"></div>
                </div>
            </div>
            <div class ="bar2">
                <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                <div class="vote_percentage">
                    <div class="vote_level" style="width:15%"></div>
                </div>
            </div>
        </div>
    </section>

    <section class= "bar-graph-three">
        <div class="position3">
            <h1><b>Position 3</b></h1>
            <div class ="bar1">
                <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                <div class="vote_percentage">
                    <div class="vote_level" style="width:65%"></div>
                </div>
            </div>
            <div class ="bar2">
                <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                <div class="vote_percentage">
                    <div class="vote_level" style="width:25%"></div>
                </div>
            </div>
        </div>
    </section>
    
    <section class= "bar-graph-four">
        <div class="position4">
            <h1><b>Position 4</b></h1>
            <div class ="bar1">
                <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                <div class="vote_percentage">
                    <div class="vote_level" style="width:85%"></div>
                </div>
            </div>
            <div class ="bar2">
                <img class="anon" src="../Admin/anon.png" width="40px" height="45px">
                <div class="vote_percentage">
                    <div class="vote_level" style="width:20%"></div>
                </div>
            </div>
        </div>
    </section>

    <section class= "bar-graph-five">
        <div class="position5">
            <h1><b>Position 5</b></h1>
            <div class ="bar1">
                <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                <div class="vote_percentage">
                    <div class="vote_level" style="width:60%"></div>
                </div>
            </div>
            <div class ="bar2">
                <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                <div class="vote_percentage">
                    <div class="vote_level" style="width:40%"></div>
                </div>
            </div>
        </div>
        </section>
    
        <section class= "bar-graph-six">
            <div class="position6">
                <h1><b>Position 6</b></h1>
                <div class ="bar1">
                    <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                    <div class="vote_percentage">
                        <div class="vote_level" style="width:75%"></div>
                    </div>
                </div>
                <div class ="bar2">
                    <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                    <div class="vote_percentage">
                        <div class="vote_level" style="width:15%"></div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class= "bar-graph-seven">
            <div class="position7">
                <h1><b>Position 7</b></h1>
                <div class ="bar1">
                    <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                    <div class="vote_percentage">
                        <div class="vote_level" style="width:70%"></div>
                    </div>
                </div>
                <div class ="bar2">
                    <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                    <div class="vote_percentage">
                        <div class="vote_level" style="width:30%"></div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class= "bar-graph-eight">
            <div class="position8">
                <h1><b>Position 8</b></h1>
                <div class ="bar1">
                    <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                    <div class="vote_percentage">
                        <div class="vote_level" style="width:85%"></div>
                    </div>
                </div>
                <div class ="bar2">
                    <img class="anon" src="../Admin/anon.png" width="40px" height="45px">
                    <div class="vote_percentage">
                        <div class="vote_level" style="width:20%"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class= "bar-graph-nine">
            <div class="position9">
                <h1><b>Position 9</b></h1>
                <div class ="bar1">
                    <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                    <div class="vote_percentage">
                        <div class="vote_level" style="width:75%"></div>
                    </div>
                </div>
                <div class ="bar2">
                    <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                    <div class="vote_percentage">
                        <div class="vote_level" style="width:15%"></div>
                    </div>
                </div>
            </div>
            </section>
        
            <section class= "bar-graph-ten">
                <div class="position10">
                    <h1><b>Position 10</b></h1>
                    <div class ="bar1">
                        <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                        <div class="vote_percentage">
                            <div class="vote_level" style="width:75%"></div>
                        </div>
                    </div>
                    <div class ="bar2">
                        <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                        <div class="vote_percentage">
                            <div class="vote_level" style="width:15%"></div>
                        </div>
                    </div>
                </div>
            </section>
        
            <section class= "bar-graph-eleven">
                <div class="position11">
                    <h1><b>Position 11</b></h1>
                    <div class ="bar1">
                        <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                        <div class="vote_percentage">
                            <div class="vote_level" style="width:65%"></div>
                        </div>
                    </div>
                    <div class ="bar2">
                        <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                        <div class="vote_percentage">
                            <div class="vote_level" style="width:25%"></div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class= "bar-graph-twelve">
                <div class="position12">
                    <h1><b>Position 12</b></h1>
                    <div class ="bar1">
                        <img class="anon" src="../Admin/anon.png" width="45px" height="45px">
                        <div class="vote_percentage">
                            <div class="vote_level" style="width:85%"></div>
                        </div>
                    </div>
                    <div class ="bar2">
                        <img class="anon" src="../Admin/anon.png" width="40px" height="45px">
                        <div class="vote_percentage">
                            <div class="vote_level" style="width:20%"></div>
                        </div>
                    </div>
                </div>
            </section>

    <button onclick="window.location.href='Front.html'" class="btn postresults"><b></b>POST RESULTS</b></button>
    <!-- <button onclick="myFunction()">Show Snackbar</button> -->

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="footer">
        <p>BS COMPUTER SCIENCE 3A © 2021</p>
    </div>

    <script>
        $('.icon').click(function () {
            $('span').toggleClass("cancel");
        });
    </script>
</body>
</html>
?>
