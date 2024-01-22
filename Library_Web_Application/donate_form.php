<?php
session_start();
require("lidhja.php");

// Merrni ID e përdoruesit nga sesioni
$user_id = $_SESSION['Id_User'];

// Merrni të dhënat e përdoruesit nga tabela "users" bazuar në ID
$user_query = "SELECT * FROM users WHERE Id_User = $user_id";
$user_result = mysqli_query($conn, $user_query);

if ($user_data = mysqli_fetch_assoc($user_result)) {
    // $name = $user_data['name'];
    // $lastname = $user_data['lastname'];
    // $email = $user_data['email'];
    // $telefon = $user_data['tel'];

    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $date = $_POST['date'];

    function isValidDateFormat($date)
    {
        // Kontrolloni nëse data është në formatin "viti.muaj.dita"
        $pattern = '/^\d{4}\.\d{2}\.\d{2}$/';
        return preg_match($pattern, $date);
    }

    if (empty($title) || empty($author) || empty($category) || empty($date) || !isValidDateFormat($date)) {
        echo '<script type="text/JavaScript"> 
                alert("Ju lutem vendosni te dhenat ne formatin e duhur!");
                window.location.href = "donate.php";
              </script>';
    } else {
        $sql = "INSERT INTO donate (user_id, title, author, category, date)
                VALUES ('$user_id', '$title', '$author', '$category', '$date');";

        if (!mysqli_query($conn, $sql)) {
            echo " Dergimi deshtoi";
        } else {
            header("Location: falenderimi.php");
        }
    }
} else {
    echo "Nuk u gjetën të dhëna për përdoruesin.";
}
?>
