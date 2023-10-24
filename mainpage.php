<?php
session_start();
if (!isset($_SESSION['loggedin']) or !$_SESSION['loggedin']) {
    header("Location: login.php");
    die();
} 
include "db_connection.php";

// Prepare a SQL statement to select data from the table
$stmt = $mysqli->prepare("SELECT title, text, picture FROM recipes");

// Execute the SQL statement
$stmt->execute();

// Bind the result to variables
$stmt->bind_result($title, $text, $picture);

include 'banner.php';
// Loop through the results and display them in boxes
echo "<div style='display: grid; grid-template-columns: repeat(3, 1fr); grid-gap: 20px;'>";
while ($stmt->fetch()) {
    echo "<div style='border: 1px solid black; padding: 10px; margin-bottom: 20px; display: flex; flex-direction: column; justify-content: center; align-items: center;'>";    echo "<h2>" . $title . "</h2>";
    echo "<h3>Let me explain how it works:</h3>";
    echo "<ul>";
    echo "<li>" . $text . "</li>";
    echo "</ul>";
    echo "<div class='recipe' style='height: 200px;'>";
    echo "<img src='data:image/jpeg;base64," . base64_encode($picture) . "' style='max-width: 100%; height: 100%; object-fit: cover;'>";
    echo "</div>";
    echo "</div>";
}

// Close the database connection when done
$stmt->close();
$mysqli->close();
?>