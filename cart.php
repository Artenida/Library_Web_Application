<?php

	include 'lidhja.php';
	session_start();

	if (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0') {
		echo '<script>window.location.href = "cart.php";</script>';
	}
	else{
		extract($_SESSION);
		if(isset($_GET['addID'])){
			$addID = $_GET['addID'];
			$sql = "INSERT INTO cart (ID_User, ID_Lib) VALUES(" . $_SESSION['Id_User'] . ", " . $addID . ")";
			$rezultati = mysqli_query($conn, $sql);
		}
	
		if(isset($_GET['deleteID']))
		{
			$deleteID = $_GET['deleteID'];
			$sql = "DELETE FROM cart
					WHERE ID_User = " . $_SESSION['Id_User'] . "
					AND ID_Lib = " . $deleteID . "
					ORDER BY ID_Cart_Item DESC
					LIMIT 1;";
			$rezultati = mysqli_query($conn, $sql);
		}
	}



$sql = "SELECT 
			c.ID_Lib, 
			COUNT(c.ID_Lib) AS Sasia, 
			l.Titulli, 
			l.Cmimi, 
			FORMAT((l.Cmimi * COUNT(c.ID_Lib)), 2) AS Total
		FROM 
			cart c
		INNER JOIN 
			librat l ON l.ID_Lib = c.ID_Lib
		WHERE 
			ID_User = " . $_SESSION['Id_User'] . "
		AND c.ID_Lib IN (SELECT DISTINCT ID_Lib FROM cart WHERE ID_USER=" . $_SESSION['Id_User'] . ")
		GROUP BY 
			c.ID_Lib, l.Titulli, l.Cmimi;";

	$result = mysqli_query($conn, $sql);
?>

<html>
	<head>
		<title>Programming Bookhouse | Librari Online</title>
		
		<link rel="stylesheet" href="Style.css" type="text/css" />
	</head>
	
	<body>
	<?php  require_once "includes/header.php";
    require_once "includes/top-menu.php"; ?>
		
	<div class="content">
	<p class="transportinfo">Shporta</p>
	<?php
	

	if ($result) 
	{
		$subtotal = 0;
		$sasiaTotale = 0;
	  echo "<table class='shportaTab'><tr><th class='left'>Titulli</th><th>Sasia</th><th>Cmimi</th><th>Total</th><th>Shto/Fshi</th></tr>";
	  while($row=mysqli_fetch_array($result))
		{
	  
		// kemi heq $id
		print "
		<tr>
			<td class='title'><a href='LibriSpecifik.php?id=" . $row['ID_Lib'] . "'>" . $row['Titulli'] . "</a> </td>		
			<td>" . $row['Sasia'] . "</td>
			<td>" . $row['Cmimi'] . " $</td>
			<td>" . $row['Total'] . " $</td>
			<td>
			   <a href='cart.php?deleteID=" . $row['ID_Lib'] . "'>Fshi</a>
			</td>
		</tr>";
			$subtotal += $row['Total'];
			$sasiaTotale += $row['Sasia'];
			}
	  
	  print "</table>
		<div class='total'>";
		if($sasiaTotale==1)
			$transport=5;
		else if($sasiaTotale>1)
			$transport=5+3*($sasiaTotale-1);
		else
			$transport=0;
		$total = $subtotal + $transport;

		print "<b>Nentotali:</b> " . $subtotal ." $<br/>";
		print "<b>* Transporti: </b>" . $transport ." $<br/>";
		print "<b>Totali: </b>" . $total ." $<br/></div>";
		
		// print "<a href='Pagesa1.php?addTotal=" . "$total" . "&addUser=" . $_SESSION['Id_User'] . "&addID=" . $addID ."'><p class='cartlinks'>Kryej pagesen</p></a>";
		print "<p class='info'><em> * Kosto e transportit eshte 5$ per produktin e pare dhe 3$ per cdo produkt shtese.</em></p>";
	}
	
	else
		print "<p class='cartlinks'><a href='Index.php'>Vazhdoni te gjeni libra</a></p>";
	?>

	
	<?php $conn->close();?>
	</div>
	<?php include("includes/Footer.php"); ?>
	</body>
</html>
