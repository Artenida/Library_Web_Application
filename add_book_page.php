<?php
session_start();
require_once "includes/admin/header.php";
$mesazh = "";

require ('lidhja.php');

if (isset($_POST['addBook'])) {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $pages = $_POST['pages'];
    $quantity = $_POST['quantity'];

    if (empty($title) || empty($author) || empty($category) || empty($description) || empty($price) || empty($pages) || empty($quantity)) {
        $mesazh = "Ju lutem plotësoni të gjitha fushat e detyrueshme.";
    } else {

        $checkSql = "SELECT * FROM lib_pershkrim WHERE `Titulli` = '$title' AND `Pershkrimi` = '$description'";
        $checkResult = mysqli_query($conn, $checkSql);

        if (mysqli_num_rows($checkResult) > 0) {
            $updateSql = "UPDATE lib_pershkrim SET `Sasia` = `Sasia` + $quantity WHERE `Titulli` = '$title' AND `Pershkrimi` = '$description'";
            $updateResult = mysqli_query($conn, $updateSql);
            if ($updateResult) {
                $mesazh = "Sasia e librave është përditësuar në db.";
            } else {
                $mesazh = "Gabim gjatë përditësimit.";
            }
        } else {
            $sql = "INSERT INTO lib_pershkrim (`Titulli`, `Pershkrimi`, `Cmimi`, `Nr_Faqeve`, `Sasia`) 
                    VALUES ('$title', '$description', '$price', '$pages','$quantity') ";

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
  <h3>Shto nje liber ne biblioteke</h3>
     <a href="admin_main_page.php"><button type="button" class="btn-close" aria-label="Close"></button></a>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Titulli</label>
    <input type="text" class="form-control" id="validationCustom01" name="title" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Autori</label>
    <input type="text" class="form-control" id="validationCustom02" name="author" required>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Kategoria</label>
    <input type="text" class="form-control" id="validationCustom03" name="category" required>
  </div>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Pershkrimi</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>

  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Cmimi</label>
    <input type="text" class="form-control" id="validationCustom05" name="price" required>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Numri i faqeve</label>
    <input type="text" class="form-control" id="validationCustom05" name="pages" required>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Sasia</label>
    <input type="text" class="form-control" id="validationCustom05" name="quantity" required>
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