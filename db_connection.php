<?php

$servername = "localhost"; // Your database host
$username = "root"; // Your database username
$password = ""; // Your database password
$database = "football_club"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

//check connection 
mysqli_select_db($conn, $database);
