<html>
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Roboto+Slab:wght@300&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/category.css">
    
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<?php
    require_once "includes/header.php";
    require_once "includes/top-menu.php";
    include 'lidhja.php';
?>
<body>
<?php
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql = "SELECT librat.*, autoret.*, libra_autor.*
			FROM librat, autoret, libra_autor
			WHERE librat.ID_Lib = $id AND librat.ID_Lib=libra_autor.ID_Lib AND autoret.ID_Autor=libra_autor.ID_Autor;";
	$result = mysqli_query($conn, $sql);
}
?>
	<div>	
	<?php

		$row = mysqli_fetch_array($result);
		
		print "<div class='container' style='padding-top: 4%;'><div class='row'><div class='col-md-12'><div class='titulli'>" . $row['Titulli'] . "</div>";
		print "<div class='cover'> <img alt='" . $row['Titulli'] . "' src='images/librat/" . $row['Titulli'] . ".jpg'/></div>";
		print "<div class='info'><b>Autori:</b>" . $row['Emri'] . " " . $row['Mbiemri'] . "<br/>";
		print "<b>Cmimi:</b> " .$row['Cmimi'];
		print "<br/><b>Numri i faqeve:</b> " . $row['Nr_Faqeve'] . "</div>";
		print "<a href='Shporta.php?addID=" . $row['ID_Lib'] . "'><p class='shto'>Shto ne shporte</p></a>";
		print "<div class='pershkrim'>" . $row['Pershkrimi'];
		print "</div></div></div></div>";
		$conn->close();
	?>
    </div>
	
	<?php require_once "includes/footer.php"; ?>
    
	</body>
</html>