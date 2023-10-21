<?php

include "db_connection.php";

$firstname = "";
$lastname = "";
$username = "";
$password = "";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

// Prepare a SQL statement to insert data into the table
$stmt = $mysqli->prepare("INSERT INTO userdata (firstname, secondname, username, password) VALUES (?, ?, ?, ?)");

// Bind the parameters to the SQL statement
$stmt->bind_param("ssss", $firstname, $lastname, $username, $hashed_password);

// Set the parameters
$firstname = test_input($_POST["firstname"]);
$lastname = test_input($_POST["lastname"]);
$username = test_input($_POST["username"]);
$password = test_input($_POST["password"]);

// Hash the password
$hashed_password = md5($firstname . $password);

// Execute the SQL statement
$stmt->execute();

header("Location: login.php");

// Close the database connection when done
$stmt->close();
$mysqli->close();
?>