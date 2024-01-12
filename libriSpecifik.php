<?php
    require ("lidhja.php");
    session_start();
    $vlere = $_SESSION['vlera'];
?>

<html>
    <head>
        <title>Pet Adoption</title>
        <link rel="stylesheet" type="text/css" href="spf_pet.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
        <script src="contact.js"></script>
    </head>
    <body>
        <section>
        <div class="menu">
                <div class = "nav-links">
                    <ul>
                        <li><a href="home.php">HOME</a></li>
                        <li><a class="active" href="category.php">CATEGORIES</a></li>
                        <li><a href="#contact" onclick="myFunction()">CONTACT</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <?php if(!empty($_SESSION['iLoguar']) && $_SESSION['roli'] == "admin") echo "<li><a href='admin_main_page.php'>ADMIN</a></li>" ?>
                    </ul>
                </div>

        <div class="right-side">
                    <form action="#" method="post">
                        <ul>
                            <li><div class = 'sign'>
                         <?php
                            if(!empty($_SESSION['iLoguar']))
                                echo "<a href='signOut.php' >SIGN OUT</a>";
                            else
//                                echo "<input type='submit' name='signIn' id='signIn' value='Sign In'>";
                                echo "<a href='login_web.php' >SIGN IN</a>";
                          ?>
                            </div></li>
                            <li><div class = "searchElements">
                                <input type="text" id = "search" name="search" placeholder="Search">
                                <button type="submit" name="kerkim" id = "search-icon"><img src="search.webp" style="width: 20px; height: 20px"></button>
                            </div></li>
                        </ul>
                         
                    
        </div>
    </div> 
    </section>
    <div class = "pet">
        <?php
        $sql = "SELECT * FROM kafshet WHERE id = $vlere";
        if(!($rez = mysqli_query($conn, $sql)))
            die("Nuk u realizua kerkesa");
        while($rresht = mysqli_fetch_row($rez)) {
            if($rresht[8] == 1)
                $var = "Eshte special";
            else
                $var = "Nuk eshte special";
//            $rresht[9] = 'data:image/;base64,' . base64_encode($rresht[9]);
            echo "<div class = 'pet-col'>
            <img src='$rresht[9]' alt='Image' style='width: 500px; height: 500px'>
            <div>
            <br><b>Emri:</b> $rresht[1]<br> 
            <p> <b>Mosha:</b> $rresht[2]<br>
            <b>Lloji:</b> $rresht[3] <br> 
            <b>Ngjyra:</b> $rresht[4]<br>
            <b>Rraca:</b> $rresht[5]<br>
            <b>Gjinia:</b> $rresht[6]<br>
            <b>Pershkrimi:</b> $rresht[7]<br>
            <b>Special:</b> $var</p>
            </button></div>";
            echo '</div>';
        }
        ?>
        <input type="submit" id = "adopt" name="adopto" value="Adopto">
        </form>
        </div>
    </body>
</html> 

<?php
    if(isset($_POST['adopto']))
        if(!empty($_SESSION['iLoguar']))
        header("Location: adoptimi.php");
    else
        header("Location: login_web.php");

    if(isset($_POST['kerkim'])) {
        $_SESSION['search'] = $_POST['search'];
        header("Location: search.php");
    }
    else
        $_SESSION['search'] = "";
?>
