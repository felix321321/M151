<?php

session_start();
if (!isset($_SESSION['loggedin']) or !$_SESSION['loggedin']) {
    header("Location: login.php");
} 

include "db_connection.php";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

// Get the recipe ID from the form data
$id = test_input($_POST['id']);

$userid = $_SESSION['user_id'];

if ($userid != $recipeUserId) {
    header("Location: mainpage.php");
    exit();
}

// Prepare a SQL statement to delete the recipe from the table
$stmt = $mysqli->prepare("DELETE FROM recipes WHERE id = ?");

$stmt->bind_param("i", $id);

// Execute the SQL statement
$stmt->execute();

// Close the database connection when done
$stmt->close();
$mysqli->close();

// Redirect the user back to the myrecipes.php page
header("Location: myrecipes.php");
exit();
?>