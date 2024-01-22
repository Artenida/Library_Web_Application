<?php
session_start();
require("lidhja.php");
$mesazh = "";
// Merrni ID e përdoruesit nga sesioni
$user_id = $_SESSION['Id_User'];

// Merrni të dhënat e përdoruesit nga tabela "users" bazuar në ID
$user_query = "SELECT * FROM users WHERE Id_User = $user_id";
$user_result = mysqli_query($conn, $user_query);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pyetja1 = mysqli_real_escape_string($conn, $_POST['pyetja1']);
    $pyetja2 = mysqli_real_escape_string($conn, $_POST['pyetja2']);
    $pyetja3 = mysqli_real_escape_string($conn, $_POST['pyetja3']);
    $pyetja4 = mysqli_real_escape_string($conn, $_POST['pyetja4']);
    $pyetja5 = mysqli_real_escape_string($conn, $_POST['pyetja5']);
    $vleresimiPergjithshem = mysqli_real_escape_string($conn, $_POST['vleresimi']);

    if (empty($pyetja1) || empty($pyetja2) || empty($pyetja3) || empty($pyetja4) || empty($pyetja5) || empty($vleresimiPergjithshem)) {
        echo '<script type="text/JavaScript"> 
                alert("Ju lutem vendosni te dhenat ne formatin e duhur dhe sigurohuni qe keni zgjedhur vleren e Vleresimit pergjithshem!");
                window.location.href = "sherbimi.php";
              </script>';
    } else {
        $sql = "INSERT INTO review (user_id, pyetja1, pyetja2, pyetja3, pyetja4, pyetja5, Vleresimi_pergjithshem)
        VALUES ('$user_id','$pyetja1', '$pyetja2', '$pyetja3', '$pyetja4', '$pyetja5', '$vleresimiPergjithshem');";

        if (!mysqli_query($conn, $sql)) {
            echo "Dergimi deshtoi";
        } else {
            header("Location: falenderimi.php");
        }
    }
} else {
    echo "Nuk u gjetën të dhëna për përdoruesin.";
}
?>
