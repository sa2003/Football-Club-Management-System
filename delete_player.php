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

// Retrieve the PlayerID to delete
if (isset($_GET["playerID"])) {
    $playerID = $_GET["playerID"];

    // Delete the player from the database
    $deleteQuery = "DELETE FROM Player WHERE PlayerID = '$playerID'";

    if ($conn->query($deleteQuery) === TRUE) {
        echo "Player deleted successfully!";
    } else {
        echo "Error deleting player: " . $conn->error;
    }
} else {
    echo "PlayerID not provided.";
}

$conn->close();
?>
