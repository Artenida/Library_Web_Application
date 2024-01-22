
<html>
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Specific-category</title>
    <link rel="stylesheet" href="css/category.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<?php
    require_once "includes/header.php";
    require_once "includes/top-menu.php";
    include 'lidhja.php';
?>

<style>
    	.nav-links ul li a ,.sign a{
	color: #ffffff;
	/** #ffffff ngjyra e bardhe e menuve*/
	text-decoration: none;
	font-size: 14px;
}

/*.sign a{
	color: #ffffff;
	text-decoration: none; *heq nenvizimin e link-ut*
	font-size: 14px;
}*/

.nav-links ul li::after, .sign a::after{
	/**kjo ben vizat e kuqe poshte menuve */
	content: '';
	width: 0%; /**nga 100% e beme 0% ne menyre qe vija e kuqe te jete e fshehur */
	height: 2px;
	background: #f44336;
	display: block;
	margin: auto;
	transition: 0.5s;
}

.nav-links ul li:hover::after, .sign a:hover::after{
	width: 100%;
}


.nav-links ul li a.active::after{
	content: '';
	width: 100%;
	height: 2px;
	background: #f44336;
	display: block;
	margin: auto;
}

.specifik {
	height: 400px;
	width:100%;
}


</style>
<body>
<?php
if(isset($_GET['catName'])) {
    $emri = urldecode($_GET['catName']);
    $sql = "SELECT kategorite.*, libra_kategori.*, librat.*
            FROM kategorite, libra_kategori, librat
            WHERE kategorite.Kategoria LIKE '$emri' AND kategorite.ID_Kat=libra_kategori.ID_Kat AND libra_kategori.ID_Lib=librat.ID_Lib";
    $result = mysqli_query($conn, $sql);
}
?>
<section class="specifik">
    <div>
	    <?php
		echo "<p class='msg'>U gjeten " . mysqli_num_rows($result) . " libra ne kategorine <b>\"" . $emri . "\"</b>.</p>";
	
		while($row = mysqli_fetch_array($result))
		{
			print "<div class='container' style='padding-top: 4%;' ><a style='color: black; cursor: pointer; text-decoration: none;' href='LibriSpecifik.php?id=$row[ID_Lib]' class='title'>" . $row['Titulli'] . "</a><br/>";
			print "<a href='LibriSpecifik.php?id=$row[ID_Lib]'><img class='coverthumb' alt='" . $row['Titulli'] . "' src='images/librat/" . $row['Titulli'] . ".jpg'/></a>";
			print substr($row['Pershkrimi'], 0, strpos(wordwrap($row['Pershkrimi'], 255), "\n"));
			print "<a href='LibriSpecifik.php?id=$row[ID_Lib]'> me shume...</a>";
			print "</div>";
			print "<hr>";
		}
		$conn->close();
	?>
    </div>
	</section>
	<?php require_once "includes/footer.php"; ?>
    
	</body>
</html>