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
    $playerID = $_POST["pid"];
    $newName = $_POST["pname"];
    $newAge = $_POST["page"];
    $newPosition = $_POST["ppos"];
    $newJerseyNumber = $_POST["pjn"];
    $newSalary = $_POST["psalary"];
    $newNationality = $_POST["pnation"];
    $newNumber = $_POST["pnumber"];
    $newHeadCoachID = $_POST["phc"];

    // Create the SQL query for updating the player
    $updateQuery = "UPDATE Player SET Name = '$newName', Age = '$newAge', Position = '$newPosition', JerseyNumber = '$newJerseyNumber', Salary = '$newSalary', Nationality = '$newNationality', NumberOfPlayer = '$newNumber', HeadCoachID = '$newHeadCoachID' WHERE PlayerID = '$playerID'";

    // Execute the query
    if ($conn->query($updateQuery) === TRUE) {
        echo "Player updated successfully!";
    } else {
        echo "Error updating player: " . $conn->error;
    }
}

$conn->close();
?>

<!-- HTML Form for updating player information -->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="About the site"/>
    <meta name="author" content="Author name"/>
    <title>FCMS - Update Player</title>

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
        <div class="title">Update Player</div>

        <form action="update_players.php" class="form_design" method="post">
            PlayerID: <input type="text" name="pid"> <br/>
            Name: <input type="text" name="pname"> <br/> 
            Age: <input type="text" name="page"> <br/>
            Position: <input type="text" name="ppos"> <br/>
            JerseyNumber: <input type="text" name="pjn"> <br/>
            Salary: <input type="text" name="psalary"> <br/>
            Nationality: <input type="text" name="pnation"> <br/>
            Number: <input type="text" name="pnumber"> <br/> <!-- Update name here -->
            HeadCoachID: <input type="text" name="phc"> <br/>
            <br/>
            <input type="submit" value="Update Player">
        </form>
    </section>

    <!-- Include necessary JavaScript scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
