<?php
session_start();
require("lidhja.php");
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Review Report</title>
    <style type="text/css">
        body {
            font-family: sans-serif;
            height: 100vh;
            background: url(images/White\ Library.jpg) center/cover no-repeat fixed;
            position: relative;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            z-index: -1;
        }

        table {
            margin: 0 auto;
            margin-top: 100px;
            background-color: aliceblue;
            border-collapse: collapse;
            border: 1px solid black;
        }

        td {
            padding: 5px;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        tr:hover {
            background-color: gainsboro;
        }

        caption {
            width: 700px;
            margin: auto;
            color: white;
            padding: 15px 0px;
            font-weight: bold;
            text-align: center;
            border-radius: 15px 15px 0px 0px;
            font-size: 28px;
        }

        .nav-links {
            list-style: none;
            display: inline-block;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
        }

        .nav-links a {
            color: white;
            font-weight: bold;
            text-decoration: none;
            font-size: 13px;
        }

        .nav-links a::after {
            content: '';
            width: 0%;
            height: 2px;
            background: red;
            display: block;
            margin: auto;
            transition: 0.5s;
        }

        .nav-links a:hover::after {
            width: 100%
        }
    </style>
</head>

<body>
    <?php
    if (!$conn) {
        die("Connection failed :" . mysqli_connect_error());
    }
    $sql = "SELECT takimet.date_id, users.name, users.lastname, users.phone, takimet.title, takimet.date, takimet.time
            FROM takimet
            JOIN users ON takimet.user_id = users.Id_User";
    $result  = mysqli_query($conn, $sql);
    ?>

    <div class="nav-links" id="navLinks">
        <p><a href="admin_main_page.php">ADMIN</a></p>
    </div>

    <table class="table-hover">
        <caption>Takimet e Rezervuara</caption>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Emri</th>
                <th scope="col">Mbiemri</th>
                <th scope="col">Numri i telefonit</th>
                <th scope="col">Titulli i librit</th>
                <th scope="col">Data e rezervuar</th>
                <th scope="col">Ora e rezervuar</th>
                <th scope="col">Veprim</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['date_id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['lastname']}</td>";
                echo "<td>{$row['phone']}</td>";
                echo "<td>{$row['title']}</td>";
                echo "<td>{$row['date']}</td>";
                echo "<td>{$row['time']}</td>";
                echo "<td class='actions'>
                        <a style='color:white; text-decoration: none; background-color: rgb(11,125,125); padding: 3%; margin-right: 7px' href='?deleteID=" . $row['date_id'] . "'>Perfundo</a>
                    </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <?php
    // Kontrollo nëse është kryer një kërkesë për të fshirë një takim
    if (isset($_GET['deleteID'])) {
        $deleteID = $_GET['deleteID'];

        // Fshi takimin nga tabela
        $deleteSql = "DELETE FROM takimet WHERE date_id = $deleteID";
        mysqli_query($conn, $deleteSql);

        // Kthehu përsëri në faqen aktuale
        header("Location: ".$_SERVER['PHP_SELF']);
        exit();
    }
    ?>
</body>
</html>