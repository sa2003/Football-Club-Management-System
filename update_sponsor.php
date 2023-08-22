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
    $sponsorID = $_POST["sid"];
    $newName = $_POST["sname"];
    $newContactDetails = $_POST["contactDetails"];

    // Create the SQL query for updating the sponsor
    $updateQuery = "UPDATE Sponsor SET Name = '$newName', ContactDetails = '$newContactDetails' WHERE SponsorID = '$sponsorID'";

    // Execute the query
    if ($conn->query($updateQuery) === TRUE) {
        echo "Sponsor updated successfully!";
    } else {
        echo "Error updating sponsor: " . $conn->error;
    }
}

$conn->close();
?>

<!-- HTML Form for updating sponsor information -->
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="About the site"/>
    <meta name="author" content="Author name"/>
    <title>FCMS - Update Sponsor</title>

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
        <div class="title">Update Sponsor</div>

        <form action="update_sponsor.php" class="form_design" method="post">
            SponsorID: <input type="text" name="sid"> <br/>
            Name: <input type="text" name="sname"> <br/>
            ContactDetails: <input type="text" name="contactDetails"> <br/> <!-- Update name here -->
            <br/>
            <input type="submit" value="Update Sponsor">
        </form>
    </section>

    <!-- Include necessary JavaScript scripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>



