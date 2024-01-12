<?php
    session_start();
	require ("lidhja.php");
    $name = $_SESSION['name'];
    $lastname = $_SESSION['lastname'];
    $email = $_SESSION['email'];
    $telefon = $_SESSION['tel'];
    
    // $leke = $_POST['total'];
	// $k_name = $_POST['k_name'];
	// $k_lastname = $_POST['k_lastname'];
    $leke = $_POST['total'];
	$k_nr = $_POST['k_nr'];
	$k_kodi = $_POST['k_kodi'];
	$k_exc = $_POST['k_exc'];
    var_dump($_POST);
 
    if(is_null($leke) || is_null($name) || is_null($lastname) || is_null($k_nr) || is_null($k_kodi) || is_null($k_exc)) {
		echo '<script type="text/JavaScript"> 
		     	alert("Ju lutem vendosni te dhenat");
		     </script>';
	}

	if(strlen($k_nr) != 16 || strlen($k_kodi) != 3){
		echo '<script type="text/JavaScript"> 
		     	alert("Ju lutem kontrolloni te dhenat tuaja,pasi ato nuk jane te sakta!");
		     </script>';
	}

	else {
        $sql = "INSERT INTO donation (name,lastname,email,phone,total)
        VALUES ('$name','$lastname','$email','$telefon','$leke');";
        // mysqli_query($conn, $sql);
        if (!mysqli_query($conn, $sql))
            echo " Dergimi deshtoi";
        else {
            $to = "bkt@gmail.com";
            $subject = "Te dhenat e donatorit";
            $txt = "$name ka dhuruar $leke.Te dhenat e llogaris jane: $name / $lastname / $k_nr / $k_kodi/ $k_exc";
            $headers = "From: petAdoption@gmail.com";

            mail($to, $subject, $txt, $headers);

            header("Location: falenderimi.php");
        }
    }
?>