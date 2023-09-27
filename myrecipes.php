<?php

include "db_connection.php";

$userid = "10";

// Prepare a SQL statement to select data from the table
$stmt = $mysqli->prepare("SELECT id, title, text, picture FROM recipes WHERE userid = ?");

$stmt->bind_param("s", $userid);

// Execute the SQL statement
$stmt->execute();

// Bind the result to variables
$stmt->bind_result($id, $title, $text, $picture);

// Output the HTML code for the menu bar
echo "<div style='display: flex; justify-content: space-between; align-items: center; padding: 10px; background-color: #f2f2f2;'>";
echo "<div>";
echo "<h1>My Recipes</h1>";
echo "</div>";
echo "<div style='display: flex;'>";
echo "<div style='margin-right: 10px;'>";
echo "<button onclick='location.href=\"addrecipe.php\";'>Add recipe</button>";
echo "</div>";
echo "<div style='margin-right: 10px;'>";
echo "<button onclick='location.href=\"mainpage.php\";'>All recipes</button>";
echo "</div>";
echo "<div style='margin-right: 10px;'>";
echo "<button onclick='location.href=\"anotherpage.php\";'>My account</button>";
echo "</div>";
echo "<div>";
echo "<button onclick='location.href=\"myrecipes.php\";'>My recipes</button>";
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
    echo "<div style='margin-bottom: 20px;'>";
    echo "<img src='data:image/jpeg;base64," . base64_encode($picture) . "' style='max-width: 100%;'>";
    echo "</div>";
    echo "<div style='display: flex;'>";
    echo "<div style='margin-right: 10px;'>";
    echo "<form method='post' action='delete_recipe.php'>";
    echo "<input type='hidden' name='id' value='" . $id . "'>";
    echo "<button type='submit' style='background-color: #f44336; color: white; border: none; padding: 10px 20px; border-radius: 5px;'>Delete</button>";
    echo "</form>";
    echo "</div>";
    echo "<div>";
    echo "<form method='post' action='update_recipe.php'>";
    echo "<input type='hidden' name='id' value='" . $id . "'>";
    echo "<button type='submit' style='background-color: #4CAF50; color: white; border: none; padding: 10px 20px; border-radius: 5px;'>Update</button>";
    echo "</form>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
}

// Close the database connection when done
$stmt->close();
$mysqli->close();
?>