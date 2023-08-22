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
    $fanNumber = $_POST["fannumber"];
    $newFanClub = $_POST["fanclub"];
    $newClubID = $_POST["clubid"];

    // Create the SQL query for updating the fan
    $updateQuery = "UPDATE fans SET FanClub = '$newFanClub', ClubID = '$newClubID' WHERE FanNumber = '$fanNumber'";

    // Execute the query
    if ($conn->query($updateQuery) === TRUE) {
        echo "Fan updated successfully!";
    } else {
        echo "Error updating fan: " . $conn->error;
    }
}

$conn->close();
?>

<!-- HTML Form for updating fan information -->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="About the site"/>
    <meta name="author" content="Author name"/>
    <title>FCMS - Update Fan</title>

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
        <div class="title">Update Fan</div>

        <form action="update_fans.php" class="form_design" method="post">
            FanNumber: <input type="text" name="fannumber"> <br/>
            FanClub: <input type="text" name="fanclub"> <br/>
            ClubID: <input type="text" name="clubid"> <br/>
            <br/>
            <input type="submit" value="Update Fan">
        </form>
    </section>

    <!-- Include necessary JavaScript scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
