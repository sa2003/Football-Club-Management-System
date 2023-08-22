<?php
// Establish a database connection (replace with your actual connection details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "football_club";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matchID = $_POST["mid"];
    $newOpponent = $_POST["opponent"];
    $newDate = $_POST["date"];
    $newTicketSold = $_POST["tickets"];
    $newClubID = $_POST["club"];

    // Create the SQL query for updating the match
    $updateQuery = "UPDATE matches SET Opponent = '$newOpponent', Date = '$newDate', TicketSold = '$newTicketSold', ClubID = '$newClubID' WHERE MatchID = '$matchID'";

    // Execute the query
    if ($conn->query($updateQuery) === TRUE) {
        echo "Match updated successfully!";
    } else {
        echo "Error updating match: " . $conn->error;
    }
}

$conn->close();
?>

<!-- HTML Form for updating match information -->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="About the site"/>
    <meta name="author" content="Author name"/>
    <title>FCMS - Update Match</title>

    <!-- Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/font-awesome.min.css" rel="stylesheet"/>
    <link href="css/animate.min.css" rel="stylesheet"/>
    <link href="css/main.css" rel="stylesheet"/>
</head>
<body>
    <section id="header">
        <div class="row">
            <div class="col-md-2" style="font-size: 30px; color:#FFFF;">Football Club Management System</div>
        </div>
    </section>

    <section id="section1">
        <div class="title">Update Match</div>

        <form action="update_matches.php" class="form_design" method="post">
            MatchID: <input type="text" name="mid"> <br/>
            Opponent: <input type="text" name="opponent"> <br/>
            Date: <input type="date" name="date"> <br/>
            TicketSold: <input type="text" name="tickets"> <br/>
            ClubID: <input type="text" name="club"> <br/>
            <br/>
            <input type="submit" value="Update Match">
        </form>
    </section>

    <!-- Include necessary JavaScript scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
