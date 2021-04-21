<?php $year = $row1['year']; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/styles_folder.css">
    <title>Document</title>
</head>

<body>
    <div class="items">
        <figure>
            <b><a href="front_ArchList_v9_0.php?year=<?= $year ?>">
                    <img src="assets/img/folder.png" width="140px" height="140px">
                    <figcaption><?php echo $year; ?></figcaption>
                </a></b>
        </figure>
    </div>
</body>

</html>