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

// Retrieve the LeagueID to delete
if (isset($_GET["leagueID"])) {
    $leagueID = $_GET["leagueID"];

    // Delete the league from the database
    $deleteQuery = "DELETE FROM League WHERE LeagueID = '$leagueID'";

    if ($conn->query($deleteQuery) === TRUE) {
        echo "League deleted successfully!";
    } else {
        echo "Error deleting league: " . $conn->error;
    }
} else {
    echo "LeagueID not provided.";
}

$conn->close();
?>
