<?php
session_start();
require_once "includes/admin/header.php";
$mesazh = "";

require ('lidhja.php');

if (isset($_POST['addAdmin'])) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $default_role = "admin"; 
    $mesazh = " ";

    if (empty($username) || empty($name) || empty($lastname) || empty($email) || empty($phone)) {
        $mesazh = "Ju lutem plotësoni të gjitha fushat e detyrueshme.";
    } else {

        $checkSql = "SELECT * FROM users
         WHERE `username` = '$username' AND `name` = '$name' AND `lastname` = '$lastname' AND `password` = '$password' AND `email` = '$email' AND `phone` = '$phone' ";
        $checkResult = mysqli_query($conn, $checkSql);

        if (mysqli_num_rows($checkResult) > 0) {
            $mesazh = "Ky admin ekziston!";
        } else {
          $sql = "INSERT INTO users (`role`, `username`, `password`, `name`, `lastname`, `email`, `phone`) 
          VALUES ('$default_role', '$username', '$password', '$name', '$lastname', '$email', '$phone')";
  

            $result = mysqli_query($conn, $sql);
            if ($result) {
                $mesazh = "Admini i shtua ne databaze";
            } else {
                $mesazh = "Admini i ri nuk u shtua ne databaze.";
            }
        }
    }
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
<link rel="stylesheet" href="css/admin_style.css">

		<!-- <p class = "name">
			<label>URL e fotos: </label><br>
            <textarea class="emri" type="text" name="img" id="" cols="50" rows="2"></textarea>
		</p> -->
<style>
    .container {
        padding: 4% 5%;
        margin: 5%;
    }

.nav-links  a{
    color: white;
    font-weight: bold;
    /** #ffffff ngjyra e bardhe e menuve*/
    text-decoration: none;
    font-size: 13px;
}
/** efektet kur klikojme dhe viza e kuqe **/
.nav-links a::after{
    /**kjo ben vizat e kuqe poshte menuve */
    content: '';
            width: 0%;
            height: 2px;
            background: red;
            display: block;
            transition: 0.5s;
        }

        .nav-links a:hover::after {
            width: 4%}
</style>

<section class="container bg-dark text-light ">
<form action="#" method="post" class="row g-3" novalidate>
  <h3>Shto nje admin te ri </h3>
     <!-- <a href="admin_main_page.php"><button type="button" class="btn-close" aria-label="Close"></button></a> -->
     <div class = "nav-links"  id="navLinks">
        <a href = "admin_main_page.php">Admin</a>
    </div>

  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Username</label>
    <input type="text" class="form-control" id="validationCustom05" name="username" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Emri</label>
    <input type="text" class="form-control" id="validationCustom01" name="name" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Mbiemri</label>
    <input type="text" class="form-control" id="validationCustom02" name="lastname" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Password</label>
    <input type="password" class="form-control" id="validationCustom02" name="password" required>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Email</label>
    <input type="text" class="form-control" id="validationCustom03" name="email" required>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Telefoni</label>
    <input type="text" class="form-control" id="validationCustom03" name="phone" required>
  </div>

  <div class="col-12">
    <button style="background-color: rgb(11, 125, 125);
                    border-color: rgb(11,125,125);" class="btn btn-primary" type="submit" name="addAdmin">Shto</button>
  </div>
  
  <p><?php  echo $mesazh ?></p>
</form>

</section>

</body>
</html>