<?php

session_start();
if (!isset($_SESSION['loggedin']) or !$_SESSION['loggedin']) {
    header("Location: login.php");
} 

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

include "db_connection.php";

$userid = $_SESSION['user_id'];
$title = test_input($_POST["title"]);
$text = test_input($_POST["text"]);
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