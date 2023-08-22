<?php
// first of all, we need to connect to the database
require_once('db_connection.php');

// we need to check if the input in the form textfields are not empty
if(isset($_POST['pid']) && isset($_POST['pname']) && isset($_POST['page']) && isset($_POST['ppos']) && isset($_POST['pjn']) && isset($_POST['psalary']) && isset($_POST['pnation']) && isset($_POST['pnumber']) && isset($_POST['phc'])){
    // write the query to check if this username and password exists in our database
    $u = $_POST['pid'];
    $p = $_POST['pname'];
    $a = $_POST['page'];
    $b = $_POST['ppos'];
    $c = $_POST['pjn'];
    $d = $_POST['psalary'];
    $e = $_POST['pnation'];
    $f = $_POST['pnumber'];
    $g = $_POST['phc'];
    
    // Assuming $u is the username (Club ID) and $p is the password (you can modify this based on your form input names)
    $sql = "insert into player VALUES( '$u', '$p', '$a', '$b', '$c', '$d', '$e', '$f', '$g' ) ";

    $result = mysqli_query($conn, $sql);

    if(mysqli_affected_rows($conn)){
        header("Location: show_players.php");

    }
    else{
        header("Location: add_players.php");

    }
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
