<?php

include "db_connection.php";

$username = "";
$firstname = "";
$password = "";

// Prepare a SQL statement to select data from the table
$stmt = $mysqli->prepare("SELECT password firstname FROM userdata WHERE username = ?");

// Bind the parameters to the SQL statement
$stmt->bind_param("s", $username);

// Set the parameters
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$firstname = trim($_POST["firstname"]);

// Execute the SQL statement
$stmt->execute();

// Bind the result to a variable
$stmt->bind_result($hashed_password);

// Fetch the result
$stmt->fetch();

// Verify the password
if (md5($firstname . $password) == $hashed_password) {
    echo "Login successful!";
} else {
    echo "Invalid username or password.";
}

// Close the database connection when done
$stmt->close();
$mysqli->close();
?>