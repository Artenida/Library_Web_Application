<?php
session_start();
require_once("lidhja.php");

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: home.php"); // Redirect to the home page if not logged in
    exit();
}

$email = $_SESSION['email'];

// Check if the form is submitted and confirmation is given
if (isset($_POST['confirm_delete'])) {
    // Delete the user from the database
    $delete_sql = "DELETE FROM users WHERE email = '$email'";
    $delete_result = mysqli_query($conn, $delete_sql);

    if ($delete_result) {
        // User successfully deleted
        session_destroy(); // Destroy the session
        header("Location: home.php"); // Redirect to the home page
        exit();
    } else {
        // Error occurred while deleting user
        echo "Error: " . mysqli_error($conn);
    }
} elseif (isset($_POST['cancel_delete'])) {
    header("Location: home.php"); // Redirect to the home page if cancellation is confirmed
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
</head>
<body>
    <script>
        // JavaScript function to display the alert and then the confirmation prompt
        function confirmDelete() {
            var showAlert = confirm("Are you sure you want to delete your account?");
            if (showAlert) {
                var confirmDelete = confirm("Are you sure?");
                if (confirmDelete) {
                    // If both confirmations are true, submit the form to delete the account
                    document.getElementById("deleteForm").submit();
                }
            } else {
                // If the first confirmation is false, redirect to the home page
                window.location.href = "home.php";
            }
        }
    </script>

    <h2>Delete Account Confirmation</h2>
    <p>Are you sure you want to delete your account?</p>
    
    <!-- Form for confirmation -->
    <form id="deleteForm" method="post" action="delete_account.php">
        <input type="submit" name="confirm_delete" value="Yes" onclick="confirmDelete()">
        <input type="submit" name="cancel_delete" value="No" href="home.php">
    </form>
</body>
</html>