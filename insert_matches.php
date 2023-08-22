<?php
// First, establish a connection to the database
require_once('db_connection.php');

// Check if the input in the form fields is not empty
if (
    isset($_POST['matchID']) &&
    isset($_POST['opponent']) &&
    isset($_POST['date']) &&
    isset($_POST['ticketSold']) &&
    isset($_POST['clubID'])
) {
    // Get the input values from the form
    $matchID = $_POST['matchID'];
    $opponent = $_POST['opponent'];
    $date = $_POST['date'];
    $ticketSold = $_POST['ticketSold'];
    $clubID = $_POST['clubID'];

    // Create the SQL query for inserting a new match
    $sql = "INSERT INTO matches (MatchID, Opponent, Date, TicketSold, ClubID) VALUES ('$matchID', '$opponent', '$date', '$ticketSold', '$clubID')";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was executed successfully
    if ($result) {
        header("Location: show_matches.php"); // Redirect to a success page
    } else {
        header("Location: add_matches.php"); // Redirect to an error page
    }

    // Check if the query returned any rows
    if (mysqli_affected_rows($conn)) {
        // The match was inserted successfully, redirect to a success page
        header("Location: show_matches.php");
    } else {
        // There was an issue inserting the match, redirect to an error page
        header("Location: add_matches.php");
    }
}
?>
