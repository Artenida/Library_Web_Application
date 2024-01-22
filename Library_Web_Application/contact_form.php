<?php
session_start();
require("lidhja.php");

// Merrni ID e përdoruesit nga sesioni
$user_id = $_SESSION['Id_User'];

// Merrni të dhënat e përdoruesit nga tabela "users" bazuar në ID
$user_query = "SELECT * FROM users WHERE Id_User = $user_id";
$user_result = mysqli_query($conn, $user_query);

if ($user_data = mysqli_fetch_assoc($user_result)) {

    $title = $_POST['title'];
    $date = $_POST['date'];
    $time = $_POST['time'];


    function isValidDateFormat($date)
    {
        // Kontrolloni nëse data është në formatin "viti.muaj.dita"
        $pattern = '/^\d{4}\.\d{2}\.\d{2}$/';
        return preg_match($pattern, $date);
    }

    if (empty($title) || empty($time) || empty($date) || !isValidDateFormat($date)) {
        echo '<script type="text/JavaScript"> 
                alert("Ju lutem vendosni te dhenat ne formatin e duhur!");
                window.location.href = "contact.php";
              </script>';
    } else {
        $sql = "INSERT INTO takimet (user_id, title, date, time)
                VALUES ('$user_id','$title', '$date', '$time');";

        if (!mysqli_query($conn, $sql)) {
            echo " Dergimi deshtoi";
        } else {
            header("Location: falenderimi.php");
            exit(); // Ensure that no further code execution occurs after the redirection
        }
    }
} else {
    echo "Nuk u gjetën të dhëna për përdoruesin.";
}
?>
