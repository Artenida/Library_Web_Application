
<?php
    // Header
    require_once "includes/header.php";
    // Menu
    require_once "includes/top-menu.php";
?>

<?php

include 'lidhja.php';

if(isset($_GET['catName'])) {
    $emri = urldecode($_GET['catName']);
    $sql = "SELECT lib_kat.*, lib_klas.*, lib_pershkrim.*
            FROM lib_kat, lib_klas, lib_pershkrim
            WHERE lib_kat.Kategoria LIKE '$emri' AND lib_kat.ID_Kat=lib_klas.ID_Kat AND lib_klas.Nr_Seri=lib_pershkrim.Nr_Seri";
    $result = mysqli_query($conn, $sql);
}
?>
		<div class="lista">
	<?php
	
		echo "<p class='msg'>U gjeten " . mysqli_num_rows($result) . " libra ne kategorine <b>\"" . $emri . "\"</b>.</p>";
	
		while($row = mysqli_fetch_array($result))
		{
			print "<div class='liber'><a href='LibriSpecifik.php?id=$row[Nr_Seri]' class='title'>" . $row['Titulli'] . "</a><br/>";
			print "<a href='LibriSpecifik.php?id=$row[Nr_Seri]'><img class='coverthumb' alt='" . $row['Titulli'] . "' src='Imazhe/" . $row['Titulli'] . ".jpg'/></a>";
			print substr($row['Pershkrimi'], 0, strpos(wordwrap($row['Pershkrimi'], 255), "\n"));
			print "<a href='LibriSpecifik.php?id=$row[Nr_Seri]'> me shume...</a>";
			print "</div>";
			print "<hr>";
		}
		
		$conn->close();
	?>
		</div>
	</div>
    <link rel="stylesheet" href="css/category.css">
<link rel="stylesheet" href="css/style.css">
	<?php
    require_once "includes/footer.php";
    ?>
	</body>
</html>