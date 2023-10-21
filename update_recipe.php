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

// Get the recipe ID from the URL parameter
$id = $_GET['id'];

// Prepare a SQL statement to select the recipe from the table
$stmt = $mysqli->prepare("SELECT title, text, picture FROM recipes WHERE id = ?");

$stmt->bind_param("i", $id);

// Execute the SQL statement
$stmt->execute();

// Bind the result to variables
$stmt->bind_result($title, $text, $picture);

// Fetch the result
$stmt->fetch();

// Close the statement
$stmt->close();

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the updated recipe information from the form data
    $title = test_input($_POST['title']);
    $text = test_input($_POST['text']);
    $picture = file_get_contents($_FILES['picture']['tmp_name']);
    $stmt;

    if ($_FILES['picture']['size'] == 0) {
        $stmt = $mysqli->prepare("UPDATE recipes SET title = ?, text = ? WHERE id = ?");
        $stmt->bind_param("ssi", $title, $text, $id);
    } else {
        $stmt = $mysqli->prepare("UPDATE recipes SET title = ?, text = ?, picture = ? WHERE id = ?");
        $stmt->bind_param("sssi", $title, $text, $picture, $id);
    }

    // Execute the SQL statement
    $stmt->execute();

    // Close the statement
    $stmt->close();

    // Redirect the user to the updated recipe page
    header("Location: myrecipes.php");
    exit();
}

include 'banner.php';

// Display the form to edit the recipe information
echo "<form method='post' enctype='multipart/form-data'>";
echo "<label for='title'>Title:</label>";
echo "<input type='text' pattern='^[A-Za-z0-9]+' name='title' value='" . $title . "'maxlength='80' value='<?php echo htmlspecialchars($title) ?>'><br>";
echo "<label for='text'>Text:</label>";
echo "<textarea name='text' maxlenght='60000' value='<?php echo htmlspecialchars($text) ?>'>" . $text . "</textarea><br>";
echo "<label for='picture'>Picture:</label>";
echo "<input type='file' name='picture'><br>";
echo "<input type='submit' value='Update Recipe'>";
echo "</form>";

// Close the database connection when done
$mysqli->close();
?>