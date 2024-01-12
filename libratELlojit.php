<?php
    session_start(); 
?>
<html>
    <head>
        <title>Pet Adoption</title>
        <link rel="stylesheet" type="text/css" href="category_style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
        <script src="contact.js"></script>
    </head>
    <body>
        <section class = "header">
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
    <div class = "categories">
        <ul>
        <?php
        require ("lidhja.php");
        
        $vlere = $_SESSION['vlera'];

        $sql = "SELECT id, emri, rraca, foto FROM kafshet WHERE lloji = '$vlere'";
        if(!($rez = mysqli_query($conn, $sql)))
            die("Nuk u realizua kerkesa");
        $variablat = "";
        while($rresht = mysqli_fetch_row($rez)) {
//            $rresht[3] = base64_encode($rresht[3]);
            echo "<li><div class = 'categories-col'><button type='submit' name='$rresht[0]'><img src='$rresht[3]' alt='Image' style='width: 200px; height: 250px'><br><b>Emri:</b> $rresht[1]<br><b>Rraca:</b> $rresht[2]</button></div></li>";
            $variablat = $variablat . $rresht[0] . " ";
        }
        ?>
        </ul>
    </div>
   </form>
    </body>
</html>
<?php
    $variablat = explode(" ", $variablat);
    foreach ($variablat as $vlere)
        if(isset($_POST[$vlere])) {
            $_SESSION['vlera'] = $vlere;
            header("Location: kafshaSpecifike.php");
        }

    if(isset($_POST['kerkim'])) {
        $_SESSION['search'] = $_POST['search'];
        header("Location: search.php");
    }
    else
        $_SESSION['search'] = "";
?>
