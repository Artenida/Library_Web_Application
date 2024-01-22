<?php
session_start();
require_once "includes/admin/header.php";
$mesazh = "";

require ('lidhja.php');

if (isset($_POST['addBook'])) {
    $title = $_POST['title'];
    $author_name = $_POST['author_name'];
    $author_lastname = $_POST['author_lastname'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $pages = $_POST['pages'];
    $quantity = $_POST['quantity'];
    $img = $_POST['img'];

    if (empty($title) || empty($author_name) || empty($author_lastname) || empty($category) || empty($description) || empty($pages) || empty($quantity)) {
        $mesazh = "Ju lutem plotësoni të gjitha fushat e detyrueshme.";
    } else {

       $checkSql = "SELECT * FROM librat
         WHERE `Titulli` = '$title' AND `Pershkrimi` = '$description'";
        $checkResult = mysqli_query($conn, $checkSql);
       
       $checkSql1 = "SELECT * FROM kategorite
        WHERE `Kategoria` = '$category'";
       $checkResult1 = mysqli_query($conn, $checkSql1);

       $checkSql2 = "SELECT * FROM autoret
       WHERE `Emri` = '$author_name' AND `Mbiemri` = '$author_lastname'";
      $checkResult2 = mysqli_query($conn, $checkSql2);

        if (mysqli_num_rows($checkResult) > 0) {
            $updateSql = "UPDATE librat
             SET `Sasia` = `Sasia` + $quantity WHERE `Titulli` = '$title' AND `Pershkrimi` = '$description'";
            $updateResult = mysqli_query($conn, $updateSql);
            if ($updateResult) {
                $mesazh = "Sasia e librave është përditësuar në db.";
            } else {
                $mesazh = "Gabim gjatë përditësimit.";
            }
        } 

        else {
          $sql0 = "INSERT INTO librat
            (`Titulli`, `Pershkrimi`, `Nr_Faqeve`, `Sasia`, `FotoPath`) 
                   VALUES ('$title', '$description', '$pages','$quantity','$img')";
                   $Result0 = mysqli_query($conn, $sql0);
        if (!(mysqli_num_rows($checkResult1)) > 0) {
          $sql1= "INSERT INTO kategorite  (`Kategoria`) VALUES('$category')";
          $Result1 = mysqli_query($conn, $sql1);
        }
          if (!(mysqli_num_rows($checkResult2) > 0))  {
            $sql2 = "INSERT INTO autoret  (`Emri`, `Mbiemri`) VALUES('$author_name', '$author_lastname')";
            $Result2 = mysqli_query($conn, $sql2);
          }
          
          $sql3 = "INSERT INTO libra_kategori (`ID_Kat`, `ID_Lib`) 
          VALUES (
             (SELECT ID_Kat FROM kategorite WHERE `Kategoria` = '$category'),
             (SELECT ID_Lib FROM librat WHERE `Titulli` = '$title')
          );
 
          INSERT INTO libra_autor (`ID_Autor`, `ID_Lib`) 
          VALUES (
             (SELECT ID_Autor FROM autoret WHERE `Emri` = '$author_name' AND `Mbiemri` = '$author_lastname'),
             (SELECT ID_Lib FROM librat WHERE `Titulli` = '$title')
          )";
          $Result3 = mysqli_multi_query($conn, $sql3); 
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
  <h3>Shto nje liber ne biblioteke</h3>
     <!-- <a href="admin_main_page.php"><button type="button" class="btn-close" aria-label="Close"></button></a> -->
     <div class = "nav-links"  id="navLinks">
        <a href = "admin_main_page.php">Admin</a>
        <a href="raporti_librat.php">Tabela e Librave:</a>
    </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Titulli</label>
    <input type="text" class="form-control" id="validationCustom01" name="title" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Emri i autorit</label>
    <input type="text" class="form-control" id="validationCustom02" name="author_name" required>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Mbiemri i autorit</label>
    <input type="text" class="form-control" id="validationCustom02" name="author_lastname" required>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Kategoria</label>
    <input type="text" class="form-control" id="validationCustom03" name="category" required>
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Foto e librit</label>
  <input class="form-control" type="file" id="img" name="img">
</div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Pershkrimi</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
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