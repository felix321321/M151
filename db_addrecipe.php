<?php

session_start();
if (!isset($_SESSION['loggedin']) or !$_SESSION['loggedin']) {
    header("Location: login.php");
} 

include "db_connection.php";

$userid = "10";
$title = $_POST["title"];
$text = $_POST["text"];
$picture = file_get_contents($_FILES["picture"]["tmp_name"]);

// Prepare a SQL statement to insert data into the table
$stmt = $mysqli->prepare("INSERT INTO recipes (userid, title, text, picture) VALUES (?, ?, ?, ?)");

$stmt->bind_param("sssb", $userid, $title, $text, $picture);

$stmt->send_long_data(3, $picture);

// Execute the SQL statement
$stmt->execute();

// Close the database connection when done
$stmt->close();
$mysqli->close();

// Redirect the user to the main page
header("Location: mainpage.php");
exit();
?>