<?php
// Database connection parameters
$hostname = "localhost";
$username = "m151";
$password = "m151";
$database = "m151";

// Create a database connection
$mysqli = new mysqli($hostname, $username, $password, $database);

// Check for connection errors
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

?>
