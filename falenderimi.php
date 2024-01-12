<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Falenderimi</title>
    <style type = "text/css">
        *{
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif; /*fontet qe jane marre nga google dhe jane ne tagun head te index.html */
        }

        body{
            /** ne projekt kjo do te jete faqja kryesore e adminit
             * **/
            min-height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url("images/library2.jpg");
            background-position: center;
            background-size: cover;
            position: relative;
        }

        nav{
            display: flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
        }

        nav img{
            /** percaktojme madhesine e logos
             * width: 150px;
             * */
            width: 80px;

        }

        nav-links{
            flex: 1;
            text-align: right;
        }

        .nav-links ul li{
            list-style: none;/* heq pikat */
            display: inline-block; /*do jene horizontalisht*/
            padding: 8px 12px;
            position: relative;
        }

        .nav-links ul li a{
            color: #ffffff;
            /** #ffffff ngjyra e bardhe e menuve*/
            text-decoration: none;
            font-size: 13px;
        }
        /** efektet kur klikojme dhe viza e kuqe **/
        .nav-links ul li::after{
            /**kjo ben vizat e kuqe poshte menuve */
            content: '';
            width: 0%; /**nga 100% e beme 0% ne menyre qe vija e kuqe te jete e fshehur */
            height: 2px;
            background: #f44336;
            display: block;
            margin: auto;
            transition: 0.5s;
        }

        .nav-links ul li:hover::after{
            width: 100%;
        }

        .butonat{
            /** pozicionimi ne qender te faqes **/
            width: 90%;
            color: #ffffff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);/** do jete ne qender te div-it**/
            text-align: center;
        }


        .butonat h1{
            font-size: 62px;
        }

        .butonat p{
            margin: 10px 0 40px;/**10px from top;
	0 from left and right
	40px from bottom **/
            font-size: 14px;
            color: #fff;
        }

        /** style-izimi per ankorin si button **/
        .butonat ul li a{
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 1px solid #fff;
            padding: 12px 34px;
            font-size: 13px;
            background: transparent;
            position: relative;
            cursor: pointer;
            width: 150px;
        }

        .butonat ul li{
            list-style: none;
            display: block; /*do jene horizontalisht*/
            padding: 8px 12px;
            position: relative;
        }

        .butonat ul li a:hover{
            border: 1px solid rgb(11, 125, 125);
            background: rgb(11, 125, 125);/**ngjyre si e kuqe , do duhet ta ndryshoje **/
            transition: 1s;
        }


    </style>
</head>
<body>

<div class = "butonat">
    <h1> <?php session_start();
        echo $_SESSION['name'] ?>, formulari juaj u dergua me sukses!</h1>
   <p></p> <p></p><ul>
        <li><a href = "signOut.php">Sign Out</a></li>
        <li><a href = "home.php">Shko ne faqen kryesore</a></li>
    </ul>
</div>
</body>
</html>
