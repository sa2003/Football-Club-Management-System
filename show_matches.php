<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About the site">
    <meta name="author" content="Author name">
    <title>FCMS - Show Matches</title>

    <!-- Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <section id="header">
        <div class="row">
            <div class="col-md-10" style="text-align: right">Football Club Management System</div>
        </div>
    </section>

    <section id="section1">
        <div class="title">All Matches List</div>
        <div style="margin: 10% 10% 50px; text-align: center; background: #66b3ff;">
            <div class="row" style="padding: 5px;">
                <div class="col-md-1">MatchID</div>
                <div class="col-md-2">Opponent</div>
                <div class="col-md-2">Date</div>
                <div class="col-md-2">Ticket Sold</div>
                <div class="col-md-2">ClubID</div>
            </div>

            <?php
            require_once("db_connection.php");
            $sql = "SELECT * FROM matches";
            $result = mysqli_query($conn, $sql);
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="row" style="padding: 20px;">
                <div class="col-md-1"><?php echo $row['MatchID']; ?></div>
                <div class="col-md-2"><?php echo $row['Opponent']; ?></div>
                <div class="col-md-2"><?php echo $row['Date']; ?></div>
                <div class="col-md-2"><?php echo $row['TicketSold']; ?></div>
                <div class="col-md-2"><?php echo $row['ClubID']; ?></div>
                <!-- Links for deleting and updating matches -->
                <div class="col-md-2">
                    <a href="delete_matches.php?matchID=<?php echo $row['MatchID']; ?>" onclick="return confirm('Are you sure you want to delete this match?')">Delete</a>
                    <a href="update_matches.php?matchID=<?php echo $row['MatchID']; ?>">Update</a>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
        <div style="margin: 10% 10% 20px; text-align: center;">
            <a href="add_matches.php" class="btn btn-primary">Add Match</a>
        </div>

        <!-- Include necessary JavaScript scripts -->
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery.isotope.min.js"></script>
        <script src="js/wow.min.js"></script>
    </section>
</body>
</html>
