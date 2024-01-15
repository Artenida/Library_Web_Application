<?php
    session_start();
    require("lidhja.php");
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Categories Report</title>
    <style type = "text/css">
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

        table{
            margin: 0 auto;
            margin-top: 100px;
            background-color: aliceblue;
            border-collapse: collapse;
            border: 1px solid black;
        }
        td{
            padding: 5px;
        }
        th,
        td {
            /* font-weight: bold; */
            /* border: 1px solid black; */
            padding: 10px;
            text-align: center;
        }
        /* tr:nth-child(odd) {
            background-color: aliceblue;
        } */

        tr:hover {
            background-color: gainsboro; /* Change the color as needed */
        }
        caption{
            width: 700px;
            margin:auto;
            color: white;
            padding: 15px 0px;
            font-weight: bold;
            text-align:center;
            border-radius:15px 15px 0px 0px;
            font-size:28px;
        }
            .nav-links {
    list-style: none;/* heq pikat */
    display: inline-block; /*do jene horizontalisht*/
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
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
            margin: auto;
            transition: 0.5s;
        }

        .nav-links a:hover::after {
            width: 100%}

                       /** style-izimi per ankorin si button **/
.butonat li a{
	/* background-color: aliceblue; */
	/* display: inline-block; */
	text-decoration: none;
	color: #fff;
	border: 1px solid #fff;
	padding: 12px 40px;
	font-size: 13px;
	background: transparent;
	position: relative;
	cursor: pointer;
	width: 150px;
}

.butonat {
    padding-bottom: 10%;
}
.butonat  li{
	/* padding: 5% 50%; */
    margin: 3% 43%; 

    text-decoration: none;
}

.butonat li a:hover{
	/* border: 1px solid #f44336; */
	/* background: #f44336;*ngjyre si e kuqe , do duhet ta ndryshoje * */
	border: 1px solid rgb(11, 125, 125);
	background: rgb(11, 125, 125);/**ngjyre si e kuqe , do duhet ta ndryshoje **/
	transition: 0.5s;

}
    </style>
</head>
<body>
    <?php
    if(!$conn){
        die("Connection failed :".mysqli_connect_error());
    }
    $sql = "SELECT * FROM kategorite";
    $result  = mysqli_query($conn, $sql);

    ?>
    <div class = "nav-links"  id="navLinks">
        <p><a href = "admin_main_page.php">ADMIN</a></p>
    </div>

    <table class="table-hover">
        <caption >Tabela e kategorive:</caption>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Kategoria</th>
    </tr>
  </thead>
  <?php
        while($row = mysqli_fetch_row($result)){
            echo("<tr>");
            foreach($row as $value)
                echo"<td>$value</td>";
            echo("</tr>");
        }
    ?>
  </tbody>
</table>
<div class="butonat">
        <li><a href = "add_new_author.php">Shto kategori</a></li>
    </div>

</body>
</html>