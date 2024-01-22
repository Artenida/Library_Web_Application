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

<link rel="stylesheet" type="text/css" href="css/delete.css">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Delete Account Confirmation</h2>
        <p>Are you sure you want to delete your account?</p>
        
        <!-- Form for confirmation -->
        <form id="deleteForm" method="post" action="delete_account.php">
            <input type="submit" name="confirm_delete" value="Yes" onclick="confirmDelete()" class="delete-button">
            <input type="submit" name="cancel_delete" value="No" class="cancel-button">
        </form>
    </div>
    
    <script>
        function confirmDelete() {
            var showAlert = confirm("Are you sure you want to delete your account?");
            if (showAlert) {
                document.getElementById("deleteForm").submit();
            } else {
                window.location.href = "home.php";
            }
        }
    </script>
</body>
</html>