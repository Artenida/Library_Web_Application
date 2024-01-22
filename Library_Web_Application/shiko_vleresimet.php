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
    $sql = "SELECT review.review_id, users.name, users.lastname, review.pyetja1, review.pyetja2,   review.pyetja3,   review.pyetja4,   review.pyetja5,  review.Vleresimi_pergjithshem
            FROM review
            JOIN users ON review.user_id = users.Id_User";
    $result  = mysqli_query($conn, $sql);
    ?>

    <div class="nav-links" id="navLinks">
        <p><a href="admin_main_page.php">ADMIN</a></p>
    </div>

    <table class="table-hover">
        <caption >Vleresimet e perdoruesve</caption>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Emri</th>
      <th scope="col">Mbiemri</th>
      <th scope="col">Si do e pershkruanit ne menyre te pergjithshme eksperincen tuaj ne biblioteke?</th>
      <th scope="col">A ishte stafi yne i gatshem per t'ju ndihmuar?</th>
      <th scope="col">A kishte stafi mjaftueshem njohuri mbi ate qe ju po kerkoni?</th>
      <th scope="col">A e gjetet librin te cilin po kerkonit dhe burime te tjera te ngjashme?</th>
      <th scope="col">A patet ndonje veshtirese dhe a mendon se ka dicka qe mund te permiresohet?</th>
      <th scope="col">Vleresimi i pergjithshem</th>
    </tr>
  </thead>
  <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['review_id']}</td>";
                echo "<td>{$row['name']}</td>";
                echo "<td>{$row['lastname']}</td>";
                echo "<td>{$row['pyetja1']}</td>";
                echo "<td>{$row['pyetja2']}</td>";
                echo "<td>{$row['pyetja3']}</td>";
                echo "<td>{$row['pyetja4']}</td>";
                echo "<td>{$row['pyetja5']}</td>";
                echo "<td>{$row['Vleresimi_pergjithshem']}</td>";
                echo "</tr>";
            }
            ?>
  </tbody>
</table>

</body>
</html>