<?php

//funktioniert noch nicht ganz, neues pw wird nicht gespeichert, keine fehlermeldung

session_start();
if (!isset($_SESSION['loggedin']) or !$_SESSION['loggedin']) {
    header("Location: login.php");
} 

include "db_connection.php";

// Get the user's ID from the session
$user_id = $_SESSION['user_id'];
$firstname = "";
$password = "";
$error_message = "";

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the old and new passwords from the form data
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];

    // Prepare a SQL statement to select the user from the table
    $stmt = $mysqli->prepare("SELECT password, firstname FROM userdata WHERE id = ?");

    $stmt->bind_param("i", $user_id);

    // Execute the SQL statement
    $stmt->execute();

    // Bind the result to a variable
    $stmt->bind_result($password, $firstname);

    // Fetch the result
    $stmt->fetch();

    // Close the statement
    $stmt->close();

    // Check if the old password is correct
    if (md5($firstname . $old_password) == $password) {
        // Hash the new password

        $hashed_password = md5($firstname . $new_password);

        // Prepare a SQL statement to update the user's password in the table
        $stmt = $mysqli->prepare("UPDATE userdata SET password = ? WHERE id = ?");

        $stmt->bind_param("si", $hashed_password, $user_id);

        // Execute the SQL statement
        $stmt->execute();

        // Close the statement
        $stmt->close();

        // Redirect the user to the account page
        header("Location: mainpage.php");
    } else {
        // Display an error message
        $error_message = "Incorrect old password.";
        
    }
}

include 'banner.php';
echo $error_message;
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Change Password</h2>
                </div>
                <div class="card-body">
                    <?php if (isset($error_message)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $error_message; ?>
                        </div>
                    <?php } ?>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
                        <div class="mb-3">
                            <label for="old_password" class="form-label">Old Password:</label>
                            <input pattern='^[A-Za-z0-9]+' type="password" class="form-control" id="old_password" name="old_password" maxlength="30" value="<?php echo htmlspecialchars($old_password) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="new_password" class="form-label">New Password:</label>
                            <input pattern='^[A-Za-z0-9]+' type="password" class="form-control" id="new_password" name="new_password" maxlength="30" value="<?php echo htmlspecialchars($new_password) ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Change Password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Close the database connection when done
$mysqli->close();
?>