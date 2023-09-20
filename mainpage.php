<?php

include "db_connection.php";

$firstname = "";
$secondname = "";
$username = "";


// Prepare a SQL statement to select data from the table
$stmt = $mysqli->prepare("SELECT firstname, secondname, username FROM userdata");

echo "<h1>Users</h1>";

// Execute the SQL statement
$stmt->execute();

echo "<h2>Users</h2>";

// Bind the result to variables
$stmt->bind_result($firstname, $secondname, $username);

// Create a table to display the data
echo "<table>";
echo "<tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>";

// Loop through the results and display them in the table
while ($stmt->fetch()) {
    echo "<tr><td>" . $firstname . "</td><td>" . $secondname . "</td><td>" . $username . "</td></tr>";
}

echo "</table>";


// Close the database connection when done
$stmt->close();
$mysqli->close();
?>