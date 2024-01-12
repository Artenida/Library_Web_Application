<?php
session_start();
require_once "includes/admin/header.php";
$mesazh = "";

require ('lidhja.php');

if (isset($_POST['addBook'])) {
    $category = $_POST['category'];

    if (empty($category)) {
        $mesazh = "Ju lutem plotësoni fushat.";
    } else {
        $checkSql = "SELECT * FROM lib_kat WHERE `Kategoria` = '$category'";
        $checkResult = mysqli_query($conn, $checkSql);

        if (mysqli_num_rows($checkResult) > 0) {
            $mesazh = "Kjo kategori ekziston!";

        } else {
            $sql = "INSERT INTO lib_kat (`Kategoria`)
                    VALUES ('$category') ";

            $result = mysqli_query($conn, $sql);
            if ($result) {
                $mesazh = "Te dhenat u ruajten ne databaze.";
            } else {
                $mesazh = "Te dhenat nuk u ruajten ne databaze.";
            }
        }
    }
}
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 

		<!-- <p class = "name">
			<label>URL e fotos: </label><br>
            <textarea class="emri" type="text" name="img" id="" cols="50" rows="2"></textarea>
		</p> -->
<style>
    .container {
        padding: 4% 5%;
        margin: 5%;
    }

</style>


<section class="container bg-dark text-light ">
<form action="#" method="post" class="row g-3" novalidate>
  <h3>Shto nje kategori librash ne biblioteke</h3>
     <a href="admin_main_page.php"><button type="button" class="btn-close" aria-label="Close"></button></a>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Kategoria</label>
    <input type="text" class="form-control" id="validationCustom01" name="category" required>
  </div>
  <div class="col-12">
    <button style="background-color: rgb(11, 125, 125);
                    border-color: rgb(11,125,125);" class="btn btn-primary" type="submit" name="addBook">Shto</button>
  </div>
  
  <p><?php  echo $mesazh ?></p>
</form>

</section>

</body>
</html>