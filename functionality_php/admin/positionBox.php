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
    <div class="Bposition1">
        <h1><b><?php echo $position['position_name']?></b></h1>
        <div class="Bcan">
            <b>Candidate Name</b>
        </div>
        <div class="Bparty">
            <b>Party</b>
        </div>
        <div class="Bbar1">
            <img class="Banon" src="../../Admin/anon.png" width="45px" height="45px">
            <div class="Bvote_percentage">
                <div class="Bvote_level" style="width:100%">
                    <b><span>100%</span></b>
                </div>
            </div>
        </div>
        <div class="Bcan">
            <b>Candidate Name</b>
        </div>
        <div class="Bparty">
            <b>Party</b>
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
</body>

</html>