<nav class = "navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand fs-4" href="home.php">Bota e librave</a>
                <!-- Toggle Btn -->
                <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Side bar -->
                <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                     <!-- Side bar header -->
                    <div class="offcanvas-header text-white border-bottom">
                        <h5 class="ofcanvas-title" id="offcanvasNavbarLabel">Our library</h5>
                        <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <!-- Side bar body  -->
                    <div class="offcanvas-body d-flex flex-column flex-lg-row 
                                    p-4 p-lg-0">
                    <ul class="navbar-nav justify-content-center align-items-center flex-grow-1 pe-3">

                        <li class="nav-item mx-2">
                            <a class="nav-link" href="home.php" style="font-size: 20px;">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="about.php" style="font-size: 20px;">Rreth nesh</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="category.php" style="font-size: 20px;">Kategorite</a>
                        </li>
                            <!-- <li><a href="#contact" onclick="myFunction()">CONTACT</a></li> -->
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#contact" id="kontaktLink" style="font-size: 20px;">Kontakt</a>
                        </li>
                        <?php if(!empty($_SESSION['iLoguar']) && $_SESSION['role'] == "admin") echo "<li><a href='admin_main_page.php' style='text-decoration: none; color: rgb(11, 125, 125);'>ADMIN</a></li>" ?>
                    </ul>
                   
                    <div class="sign d-flex flex-row flex-lg-row
                    justify-content-center align-items-center gap-4">
                    
                    <a href="cart.php"><i class="fa-solid fa-cart-shopping" style="font-size: 20px;"></i></a>
                         <?php
                            if(!empty($_SESSION['iLoguar']))
                                echo "<a href='signOut.php' >SIGN OUT</a>";
                            else
//                                echo "<input type='submit' name='signIn' id='signIn' value='Sign In'>";
                                echo "<a href='login_web.php' >SIGN IN</a>";
                          ?>
                    </div>
                    </div>
                </div>
            </div>
        </nav> 