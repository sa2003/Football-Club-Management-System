<?php
// First of all, we need to connect to the database
require_once('db_connection.php');

// We need to check if the input in the form textfields are not empty
if (isset($_POST['fannumber']) && isset($_POST['fanclub']) && isset($_POST['clubid'])) {
    // Get the values from the form
    $fannumber = $_POST['fannumber'];
    $fanclub = $_POST['fanclub'];
    $clubid = $_POST['clubid'];

    // Write the query to insert fan data into the fans table
    $sql = "INSERT INTO fans (FanNumber, FanClub, ClubID) VALUES ('$fannumber', '$fanclub', '$clubid')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: show_fans.php");
    } else {
        header("Location: add_fans.php");
    }

    // Check if the query was executed successfully
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }
}
?>
