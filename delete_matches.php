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

// Retrieve the MatchID to delete
if (isset($_GET["matchID"])) {
    $matchID = $_GET["matchID"];

    // Delete the match from the database
    $deleteQuery = "DELETE FROM matches WHERE MatchID = '$matchID'";

    if ($conn->query($deleteQuery) === TRUE) {
        echo "Match deleted successfully!";
    } else {
        echo "Error deleting match: " . $conn->error;
    }
} else {
    echo "MatchID not provided.";
}

$conn->close();
?>
