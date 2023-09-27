<?php

include "db_connection.php";

// Prepare a SQL statement to select data from the table
$stmt = $mysqli->prepare("SELECT title, text, picture FROM recipes");

// Execute the SQL statement
$stmt->execute();

// Bind the result to variables
$stmt->bind_result($title, $text, $picture);

// Output the HTML code for the menu bar
echo "<div style='display: flex; justify-content: space-between; align-items: center; padding: 10px; background-color: #f2f2f2;'>";
echo "<div>";
echo "<h1>All Recipes</h1>";
echo "</div>";
echo "<div style='display: flex;'>";
echo "<div style='margin-right: 10px;'>";
echo "<button onclick='location.href=\"mainpage.php\";'>All recipies</button>";
echo "</div>";
echo "<div style='margin-right: 10px;'>";
echo "<button onclick='location.href=\"anotherpage.php\";'>My account</button>";
echo "</div>";
echo "<div>";
echo "<button onclick='location.href=\"myrecipies.php\";'>My recipies</button>";
echo "</div>";
echo "</div>";
echo "</div>";

// Loop through the results and display them in boxes
echo "<div style='display: grid; grid-template-columns: repeat(3, 1fr); grid-gap: 20px;'>";
while ($stmt->fetch()) {
    echo "<div style='border: 1px solid black; padding: 10px; margin-bottom: 20px; display: flex; flex-direction: column; justify-content: center; align-items: center;'>";    echo "<h2>" . $title . "</h2>";
    echo "<h3>Let me explain how it works:</h3>";
    echo "<ul>";
    echo "<li>" . $text . "</li>";
    echo "</ul>";
    echo "<h3>It can look like this!:</h3>";
    echo "<img src='data:image/jpeg;base64," . base64_encode($picture) . "'>";
    echo "</div>";
}

// Close the database connection when done
$stmt->close();
$mysqli->close();
?>