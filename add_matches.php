<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="About the site">
    <meta name="author" content="Author name">
    <title>FCMS</title>

    <!-- Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
</head>
<body>
    <section id="header">
        <div class="row">
            <div class="col-md-2" style="font-size: 30px;color:#FFFF;">Football Club Management System</div>
        </div>
    </section>

    <section id="section1">
        <div class="title">Add a Match</div>

        <form action="insert_matches.php" class="form_design" method="post">
            MatchID: <input type="text" name="matchID"><br>
            Opponent: <input type="text" name="opponent"><br>
            Date: <input type="date" name="date"><br>
            TicketSold: <input type="text" name="ticketSold"><br>
            ClubID: <input type="text" name="clubID"><br>
            <br>
            <input type="submit" value="Add to Database">
        </form>
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
