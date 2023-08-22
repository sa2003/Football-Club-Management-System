<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About the site">
    <meta name="author" content="Author name">
    <title>FCMS - Fans</title>

    <!-- Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/animate.min.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet"/>
</head>
<body>
    <section id="header">
        <div class="row">
            <div class="col-md-10" style="text-align: right">Football Club Management System</div>
        </div>
    </section>

    <section id="section1">
        <div class="title">All Fans List</div>
        <div style="margin: 10% 10% 50px; text-align: center; background: #66b3ff;">
            <div class="row" style="padding: 5px;">
                <div class="col-md-1">FanNumber</div>
                <div class="col-md-1">FanClub</div>
                <div class="col-md-1">ClubID</div>
            </div>

            <?php
            require_once("db_connection.php");
            $sql = "SELECT * FROM fans";
            $result = mysqli_query($conn, $sql);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="row" style="padding: 50px;">
                <div class="col-md-1"><?php echo $row[0]; ?></div>
                <div class="col-md-1"><?php echo $row[1]; ?></div>
                <div class="col-md-1"><?php echo $row[2]; ?></div>
                <!-- Inside the loop that displays fan information in show_fans.php -->
                
                <a href="update_fans.php?fanNumber=<?php echo $row[0]; ?>">Update</a>
            </div>
            <?php  
                }
            }
            ?>
        </div>
    </section>

    <div style="margin: 10% 10% 20px; text-align: center;">
        <a href="add_fans.php" class="btn btn-primary">Add Fans</a>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
