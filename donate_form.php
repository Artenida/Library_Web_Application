<?php
    session_start();
	require ("lidhja.php");
    $name = $_SESSION['name'];
    $lastname = $_SESSION['lastname'];
    $email = $_SESSION['email'];
    $telefon = $_SESSION['tel'];

    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $date = $_POST['date'];

    function isValidDateFormat($date)
{
    // Check if the date is in the "year.month.day" format
    $pattern = '/^\d{4}\.\d{2}\.\d{2}$/';
    return preg_match($pattern, $date);
}
    
    // var_dump($_POST);
 
    if(empty($title) || empty($author) || empty($category) || empty($date) || !isValidDateFormat($date)) {
		echo '<script type="text/JavaScript"> 
		     	alert("Ju lutem vendosni te dhenat ne formatin e duhur!");
                 window.location.href = "donate.php";
		     </script>';
	}

	else {
        $sql = "INSERT INTO donation (name,lastname,email,phone,title, author, category, date)
        VALUES ('$name','$lastname','$email','$telefon', '$title', '$author', '$category','$date');";
        // mysqli_query($conn, $sql);
        if (!mysqli_query($conn, $sql))
            echo " Dergimi deshtoi";
        else {
            header("Location: falenderimi.php");
        }
    }
?>