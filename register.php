<?php

include "dbconnection.php";

$firstname = "";
$lastname = "";
$username = "";
$password = "";

// Prepare a SQL statement to insert data into the table
$stmt = $mysqli->prepare("INSERT INTO userdata (firstname, secondname, username, password) VALUES (?, ?, ?, ?)");

// Bind the parameters to the SQL statement
$stmt->bind_param("ssss", $firstname, $lastname, $username, $password);

// Set the parameters
$firstname = trim($_POST["firstname"]);
$lastname = trim($_POST["lastname"]);
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);

// Execute the SQL statement
$stmt->execute();

// Close the database connection when done
$stmt->close();
$mysqli->close();
?>