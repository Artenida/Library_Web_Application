<?php
    include 'lidhja.php';
    session_start();

    if (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0') {
        echo '<script>window.location.href = "cart.php";</script>';
    } else {
        extract($_SESSION);

        if (isset($_GET['addID'])) {
            $addID = $_GET['addID'];
             // Check if the book is already in the cart
             $checkSql = "SELECT * FROM cart WHERE ID_User = " . $_SESSION['Id_User'] . " AND ID_Lib = " . $addID;
             $checkResult = mysqli_query($conn, $checkSql);
 
             if (mysqli_num_rows($checkResult) > 0) {
                 // Book is already in the cart, display alert
                 $alertMessage = "Libri është tashmë në shportë.";
                } else {
                 // Book is not in the cart, add it to the cart
                 $sql = "INSERT INTO cart (ID_User, ID_Lib) VALUES(" . $_SESSION['Id_User'] . ", " . $addID . ")";
                 $rezultati = mysqli_query($conn, $sql);
             }
         }

        if (isset($_GET['deleteID'])) {
            $deleteID = $_GET['deleteID'];
            $sql = "DELETE FROM cart
                    WHERE ID_User = " . $_SESSION['Id_User'] . "
                    AND ID_Lib = " . $deleteID . "
                    ORDER BY ID_Cart_Item DESC
                    LIMIT 1;";
            $rezultati = mysqli_query($conn, $sql);
        }
    }

    // Retrieve cart items
    $sql = "SELECT * FROM cart INNER JOIN librat ON cart.ID_Lib = librat.ID_Lib WHERE ID_User = " . $_SESSION['Id_User'];
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <style>
        table.shportaTab {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .title {
            width: 60%;
        }

        .actions {
            width: 40%;
            text-align: right;
        }

        .content {
            max-width: 800px;
            margin: 4% 25%;
        }
		.cart {
			height: 400px;
			width: 100%;
		}
        .titulli {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 30px;
            align-items: center;
            color: black;
            padding-top: 8%;
            margin-left: 40%;
        }
          </style>
    <title>Shporta</title>

    <!-- <script>
        function showAlert(message) {
            alert(message);
        }
    </script> -->
</head>
<body>

    <?php require_once "includes/header.php"; ?>
    <?php require_once "includes/top-menu.php"; ?>

	<section class="cart">
    <div class="content">
        <p class="titulli">Shporta</p>

        <?php
        if ($result && mysqli_num_rows($result) > 0) {
            echo "<table class='shportaTab'><tr><th class='title'>Titulli</th><th style='padding-right: 3%;' class='actions'>Fshi</th></tr>";

            while ($row = mysqli_fetch_array($result)) {
                echo "
                <tr>
                    <td class='title'><a style='color:black; text-decoration: none; cursor: pointer;' href='LibriSpecifik.php?id=" . $row['ID_Lib'] . "'>" . $row['Titulli'] . "</a> </td>        
                    <td class='actions'>
                        <a style='color:white; text-decoration: none; background-color: rgb(11,125,125); padding: 3%; margin-right: 7px' href='cart.php?deleteID=" . $row['ID_Lib'] . "'>Fshi</a>
                    </td>
                </tr>";
                
            }
            echo "</table>";
        } else {
            echo "<p class='cartlinks'><a href='category.php'>Vazhdoni te gjeni libra</a></p>";
        }
        ?>
            <?php
                echo "
                <a style='color:white; text-decoration: none; background-color: rgb(11,125,125); padding: 1%; margin-left: 40%; margin-right: 6px' href='contact.php'>Kontakto</a>
                "; ?>
                
        <?php $conn->close();?>
    </div>
	</section>
    
    <?php include("includes/Footer.php"); ?>
</body>
</html>
