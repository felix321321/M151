<?php
session_start();

include "db_connection.php";

$password = "";
$username = "";
$firstname = "abc";
$id = 0;

// Prepare a SQL statement to select data from the table
$stmt = $mysqli->prepare("SELECT id, password, firstname FROM userdata WHERE username = ?");

// Bind the parameters to the SQL statement
$stmt->bind_param("s", $username);

// Set the parameters
$username = trim($_POST["username"]);
$password = trim($_POST["password"]);
$id = trim($_POST["id"]);

// Execute the SQL statement
$stmt->execute();

// Bind the result to a variable
$stmt->bind_result($id, $hashed_password, $firstname);


// Fetch the result
$stmt->fetch();

// Verify the password
if (md5($firstname . $password) == $hashed_password) {
    $_SESSION['loggedin'] = true;
    $_SESSION['user_id'] = $id;
    session_regenerate_id(true);
    header("Location: mainpage.php");
} else {
    header("Location: login.php");
}

// Close the database connection when done
$stmt->close();
$mysqli->close();
?>