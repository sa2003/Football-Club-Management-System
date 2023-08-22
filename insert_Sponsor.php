<?php
// First, establish a connection to the database
require_once('db_connection.php');

// Check if the input in the form fields is not empty
if (
    isset($_POST['sid']) &&
    isset($_POST['sname']) &&
    isset($_POST['contactDetails'])
) {
    // Get the input values from the form
    $sid = $_POST['sid'];
    $sname = $_POST['sname'];
    $contactDetails = $_POST['contactDetails'];

    // Create the SQL query for inserting a new sponsor
    $sql = "INSERT INTO sponsor (SponsorID, Name, ContactDetails) VALUES ('$sid', '$sname', '$contactDetails')";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the query was executed successfully
    if ($result) {
        header("Location: show_sponsor.php"); // Redirect to a success page
    } else {
        header("Location: add_sponsor.php"); // Redirect to an error page
    }

    // Check if the query returned any rows
    if (mysqli_affected_rows($conn)) {
        // The sponsor was inserted successfully, redirect to a success page
        header("Location: show_sponsor.php");
    } else {
        // There was an issue inserting the sponsor, redirect to an error page
        header("Location: add_sponsor.php");
    }
}
?>


