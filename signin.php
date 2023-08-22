<?php
// first of all, we need to connect to the database
require_once('db_connection.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['fname']) && isset($_POST['pass'])){
    // write the query to check if this username and password exists in our database
    $u = $_POST['fname'];
    $p = $_POST['pass'];
    
    // Assuming $u is the username (Club ID) and $p is the password (you can modify this based on your form input names)
    $sql = "SELECT * FROM Club WHERE ClubID = '$u'";

    $result = mysqli_query($conn, $sql);

    // Check if the query was executed successfully
    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    // Check if the query returned any rows
    if (mysqli_num_rows($result) != 0) {
        // The club ID is valid, redirect to home page
        header("Location: home.php");
    } else {
        // The club ID is not valid, redirect to sign-in page
        header("Location: index.php");
    }
}
?>

