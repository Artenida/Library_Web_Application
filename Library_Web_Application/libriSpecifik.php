<?php
session_start();

require_once "includes/header.php";
require_once "includes/top-menu.php";
include 'lidhja.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT librat.*, autoret.*, libra_autor.*
            FROM librat
            JOIN libra_autor ON librat.ID_Lib = libra_autor.ID_Lib
            JOIN autoret ON autoret.ID_Autor = libra_autor.ID_Autor
            WHERE librat.ID_Lib = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
}

if (!empty($_SESSION['iLoguar'])) {
    $redirectIloguar = "cart.php?addID=" . $row['ID_Lib'];
} else {
    $redirectIloguar = "login_web.php";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row['Titulli']; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/category.css"> -->

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

</style>
</head>



<body>
    <div class="container mt-4">
        <h1 class="titulli" style="padding: 4%;"><?php echo $row['Titulli']; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid cover"
                    alt="<?php echo $row['Titulli']; ?>" src="images/librat/<?php echo $row['Titulli']; ?>.jpg" />
            </div>
            <div class="col-md-6">
                <div class="info">
                    <p><b>Autori:</b> <?php echo $row['Emri']; ?></p>
                    <p><b>Numri i faqeve:</b> <?php echo $row['Nr_Faqeve']; ?></p>
                    <a href="<?php echo $redirectIloguar; ?>" class="btn btn-success mt-3">Shto ne shporte</a>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div class="pershkrim"><?php echo $row['Pershkrimi']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
