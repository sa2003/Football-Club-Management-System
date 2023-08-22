<?php
// First of all, we need to connect to the database
require_once('db_connection.php');

// We need to check if the input in the form textfields is not empty
if (
    isset($_POST['lid']) && 
    isset($_POST['lname']) && 
    isset($_POST['lcountry']) && 
    isset($_POST['ldate'])
) {
    $leagueID = $_POST['lid'];
    $leagueName = $_POST['lname'];
    $leagueCountry = $_POST['lcountry'];
    $leagueDate = $_POST['ldate'];

    // Write the query to insert league information into the database
    $sql = "INSERT INTO league (LeagueID, Name, Country, Date) VALUES ('$leagueID', '$leagueName', '$leagueCountry', '$leagueDate')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: show_leagues.php"); // Redirect to a success page
    } else {
        header("Location: add_leagues.php"); // Redirect to an error page
    }

    // Check if the query returned any rows
    if (mysqli_affected_rows($conn)) {
        // The match was inserted successfully, redirect to a success page
        header("Location: show_leagues.php");
    } else {
        // There was an issue inserting the match, redirect to an error page
        header("Location: add_leagues.php");
    }
}
?>
