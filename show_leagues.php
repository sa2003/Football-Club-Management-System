<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta name="description" content="About the site"/>
        <meta name="author" content="Author name"/>
        <title>FCMS - All Leagues List</title>

        <!-- Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet"/>
        <link href="css/font-awesome.min.css" rel="stylesheet"/>
        <link href="css/animate.min.css" rel="stylesheet"/>
        <link href="css/main.css" rel="stylesheet"/>
    </head>

    <body>
        <section id="header">
            <div class="row">
               <div class="col-md-10" style="text-align: right">Football Club Management System<div>
               </div>
            </div>
        </section>

        <section id="section1">
            <div class="title">All Leagues List</div>
            <div style="margin: 10% 10% 50px 10%; text-align:center; background:#66b3ff;">
            <div class="row" style="padding:5px;">
                    <div class="col-md-1">LeagueID</div>
                    <div class="col-md-1">Name</div>
                    <div class="col-md-1">Country</div>
                    <div class="col-md-1">Date</div>
            </div>

            <?php
            require_once("db_connection.php");
            $sql = "SELECT * FROM league";
            $result = mysqli_query($conn, $sql);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="row" style="padding: 50px;">
                <div class="col-md-1"><?php echo $row[0]; ?></div>
                <div class="col-md-1"><?php echo $row[1]; ?></div>
                <div class="col-md-1"><?php echo $row[2]; ?></div>
                <div class="col-md-1"><?php echo $row[3]; ?></div>
                    <a href="delete_league.php?leagueID=<?php echo $row[0]; ?>" onclick="return confirm('Are you sure you want to delete this league?')">Delete</a>
            
                    <a href="update_leagues.php?leagueID=<?php echo $row[0]; ?>">Update</a>
            </div>
                        
            <?php
                }
            }
            ?>
        </section>
        <div style="margin: 10% 10% 20px 10%; text-align:center;">
            <a href="add_leagues.php" class="btn btn-primary">Add League</a>
        </div>

        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/wow.min.js"></script>
    </body>
</html>
