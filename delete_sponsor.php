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

// Retrieve the SponsorID to delete
if (isset($_GET["sponsorID"])) {
    $sponsorID = $_GET["sponsorID"];

    // Delete the sponsor from the database
    $deleteQuery = "DELETE FROM sponsor WHERE SponsorID = '$sponsorID'";

    if ($conn->query($deleteQuery) === TRUE) {
        echo "Sponsor deleted successfully!";
    } else {
        echo "Error deleting sponsor: " . $conn->error;
    }
} else {
    echo "SponsorID not provided.";
}

$conn->close();
?>
