
<?php
    session_start();
    require_once "includes/header.php";

//if(isset($_POST['signIn']))
//    header("Location: login_web.php");

if(isset($_POST['donate'])){
    if(!empty($_SESSION['iLoguar']))
        header("Location: donate.php");
    else
        header("Location: login_web.php");
}

if(isset($_POST['review'])){
    if(!empty($_SESSION['iLoguar']))
        header("Location: sherbimi.php");
    else
        header("Location: login_web.php");
}
?>
<link rel="stylesheet" href="css/style.css">

 <script src="contact.js"></script>
<body>
    
<?php
require_once "includes/top-menu.php";
?>

<section class="home">
    <div class="main">
        <h2>Miresevini ne biblioteke <?php if(!empty($_SESSION['username'])) echo $_SESSION['username'] ?> !</h2>
        <h5>"Zhvillo botëra të pakufizuara brenda librave, ku çdo faqe mbart fuqinë për të frymëzuar, për të ndriçuar, dhe për të transformuar narrativën tënde.""</h5>
    </div>
    <div id="donate">
        <form action="#" method="post">
            <button type="submit" name="review" class="about-button" >Vlereso Sherbimin</button>
        </form>
    </div>
</section>

<section id="services" class="services section-padding">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Sherbimet Tona</h2>
                        <p style="color: black;">Ne vijim paraqesim sherbimet tona kryesore per te qene sa me afer jush!</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card text-white text-center bg-light pb-2">
                        <div class="card-body">
                            <i class="fa-brands fa-slack"></i>                            
                            <h3 class="card-title">Akses në Burime</h3>
                            <p class="lead">Sigurimi i një koleksioni të pasur dhe të përditësuar të librave, materialeve të periodikave, dhe burimeve të tjera informative.</p>
                            <a href="about.php"><button class="btn text-light" style="background-color: rgb(11, 125, 125);">Read More</button></a>
                        </div>
                    </div>
                </div><div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card text-white text-center bg-light pb-2">
                        <div class="card-body">
                            <i class="fa-brands fa-slack"></i>
                            <h3 class="card-title">Ndihma dhe Këshilla</h3>
                            <p class="lead">Ofrimi i ndihmës dhe këshillave nga bibliotekarët për gjetjen e informacionit dhe përdorimin e burimeve të bibliotekës.</p>
                            <a href="about.php"><button class="btn text-light" style="background-color: rgb(11, 125, 125);">Read More</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card text-white text-center bg-light pb-2">
                        <div class="card-body">
                            <i class="fa-brands fa-slack"></i>                            
                            <h3 class="card-title">Librat me te pelqyer</h3>
                            <p class="lead">Përmirësimi i diversitetit në koleksion dhe sigurimi i kopjeve të fundit te librave me te shitur për të përmirësuar lëvizjen e librave në bibliotekë.</p>
                            <a href="about.php"><button class="btn text-light" style="background-color: rgb(11, 125, 125);">Read More</button></a>                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-text">
                        <h2>Bota e librave</h2>
                        <p>Misioni ynë është të sigurojmë një strehë për dashamirët e librave, 
                            një oazë ku përcillet një bashkëngjiturë e historive të ndryshme, shikimeve, dhe aventurave. 
                            Nga klasiket kohët e vjetra deri te thellësitë e kohës së sotme, seleksioni ynë me kujdes
                             përmban shumë lloje dhe kultura, duke i shërbyer çdo shijeti letrar.
                            Librat tanë janë si portrete të botës së njëjtë që shpërfaqet në mënyra të ndryshme, 
                            duke u përpjekur të ofrojmë një eksperiencë unike për lexuesit tanë.</p>
                        <p>Ekipi ynë i përkushtuar është këtu për të ju ndihmuar në udhëtimin tuaj letrar, duke ofruar rekomandime, 
                            duke organizuar ngjarje, dhe siguruar që Biblioteka Jonë të mbetet një qendër e gjallë për shkëmbimin e ideve.</p>
                    </div>
                    <div class="about-button">
                        <!-- Change button type to "button" and use JavaScript or a proper link for navigation -->
                        <button type="button" onclick="window.location.href='about.php'">Rreth nesh</button>
                    </div>
                </div>
            </div>
        </div>
</section>

    <section id="donate" class="donate-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="donate-img">
                        <img src="images/donate1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 ps-lg-5 mt-md-5">
                    <div class="donate-text">
                        <h2>Dhuro nje liber</h2>
                        <p>Dhurimi i librave është një veprim thelbësor që shtrihet thellë në sferat e dijes 
                            dhe promovon një kulturë të ndarjes dhe të mësuarit. 
                            Duke dhuruar para për të blerë një liber, ju jepni mundësinë për zgjedhje të larmishme,
                             duke përfshirë tituj të freskët dhe interesante. 
                            Ky veprim jo vetëm që mund të mbështesë autorët dhe botuesit, por gjithashtu bën të mundur
                             që ju të zgjidhni librin që do të përmirësojë njohuritë tuaja ose t'ju ofrojë momente të këndshme leximi. </p>
                        <!-- <a href="" class="btn btn-warming">Donate</a> -->
                    
                    <div id="donate">
                        <form action="#" method="post">
                            <button type="submit" name="donate" class="about-button" >Dhuro</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="staf" class="staf section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Bibliotekarët</h2>
                        <p>Mos ngurroni te kontaktoni me stafin tone per t'iu ofruar nje eksperience te pasur leximi, plot ndjenja dhe emocione.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="images/staf1.jpeg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-tite">Artenida Daci</h3>
                            <h3 class="card-tite">Bibliotekare</h3>
                            <p class="lead">Bibliotekari është përgjegjës për menaxhimin e librave në bibliotekë. Ai regjistron hyrjet 
                                dhe daljet e librave, dhe ndihmon vizitorët në gjetjen e librit që kerkojne.</p>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="images/staf2.jpeg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-tite">Erisa Ahmeti</h3>
                            <h3 class="card-tite">Bibliotekare e referencave</h3>
                            <p class="lead"> Bibliotekari i referencave është ekspert në burime informative, ndihmon vizitorët në 
                                gjetjen e informacionit, si dhe ofron asistencë për përgjigjen e pyetjeve.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="images/staf3.jpeg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-tite">Klaus Kaliaj</h3>
                            <h3 class="card-tite">Specialisti i Teknologjisë</h3>
                            <p class="lead">Specialisti i Teknologjisë është përgjegjës për menaxhimin dhe përdorimin e teknologjisë në 
                                bibliotekë.</p><br>
            
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="images/staf4.jpeg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-tite">Nexhmie Cemeta</h3>
                            <h3 class="card-tite">Arkiviste</h3>
                            <p class="lead">Arkivisti është i përgjegjës për ruajtjen dhe menaxhimin e arkivave dhe materialeve 
                                historike të bibliotekës, si dhe kujdeset për mbajtjen e dokumentacionit.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <?php
        require_once "includes/footer.php";
        ?>
    </body>
</html>

