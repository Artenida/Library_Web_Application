<?php
session_start();
?>


<?php
    // Header
    require_once "includes/header.php";
    // Menu
    require_once "includes/top-menu.php";

?>
       <link rel="stylesheet" href="../css/style.css">
       <link rel="stylesheet" href="../css/about.css">

<body>    
    <section class="about-page">
        <div class="about-page-text">
            <h2>Bota e librave</h2>
            <p>Misioni ynë është të krijojmë një strehë për dashamirësit e librave, 
                një qendër ku ngjarje të ndryshme, mendime dhe aventura bashkohen.
                 Nga klasiket kohët e lashta deri te thesaret e sotme, seleksionimi ynë i kujdesshëm 
                 shtrihet nëpër zhanre dhe kultura, duke përgjigjur çdo shije letrare. </p>
            <p>Ne krenohemi me kultivimin e një komuniteti që feston fjalën e shkruar.
                 Bashkohuni me ne për ngjarje, klube të librave dhe diskutime që nxitin 
                 kuriozitetin intelektual dhe lidhin individët që ndajnë pasionin për mësimin gjatë gjithë jetës.</p>
            <p>Ekipi ynë i përkushtuar është këtu për t'ju ndihmuar në udhëtimin tuaj letrar, 
                duke ofruar rekomandime, organizuar ngjarje dhe siguruar që "Bota e librave" 
                të mbetet një qendër e gjallë për shkëmbimin e ideve. Hajdeni, bëhuni pjesë e "Botes se Librave" - 
                një vend ku përrallat bëhen realitet, dhe magjia e leximit zhvillohet me çdo faqe të kthyer. </p>
            <p>Eksploroni, zbuloni dhe lejoni botën e librave të hapë kapituj të rinj në jetën tuaj.
                 Mirë se vini në një botë ku imagjinata nuk njeh kufij!</p>            
        </div>
        <!-- <div class="about-page-button">
        <button type="button" onclick="window.location.href='categories.php'">Categories</button>
        </div> -->
    </section>
    <section id="services" class="services section-padding">

        <div class="container" style="padding-bottom: 4%;">
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
                            <p class="lead">Sigurimi i një koleksioni të pasur dhe të përditësuar të librave, materialeve të periodikave, dhe burimeve të tjera informative.
                            Synojme qe t'i ofrojmë përdoruesve një gamë të gjerë të kulturës, ndjenjave dhe emocioneve përmes burimeve të ndryshme,
                            duke u siguruar që kykoleksion të jetë i rregulluar dhe aktualizuar në mënyrë që të përgjigjet nevojave dhe interesave të komunitetit.
                            </p>
                            <a href="about.php"><button class="btn text-light" style="background-color: rgb(11, 125, 125);">Read More</button></a>
                        </div>
                    </div>
                </div><div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card text-white text-center bg-light pb-2">
                        <div class="card-body">
                            <i class="fa-brands fa-slack"></i>
                            <h3 class="card-title">Ndihma dhe Këshilla</h3>
                            <p class="lead">Ofrimi i ndihmës dhe këshillave nga bibliotekarët për gjetjen e informacionit dhe përdorimin e burimeve të bibliotekës.
                                Nese po kerkoni sugjerime per libra te cfaredolloj kategorie, ato do te jene gjithmone aty per ju. Me mbi 50% te librave te lexuar, 
                                nga te gjitha fushat, ato jane gjithmone te gatshem t'iu afrojne sa me afer botes se librave, sa me afer emocioneve te cilat keni 
                                nevoje te perjetoni.
                            </p>
                            <a href="about.php"><button class="btn text-light" style="background-color: rgb(11, 125, 125);">Read More</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card text-white text-center bg-light pb-2">
                        <div class="card-body">
                            <i class="fa-brands fa-slack"></i>                            
                            <h3 class="card-title">Librat me te pelqyer</h3>
                            <p class="lead">Përmirësimi i diversitetit në koleksion dhe sigurimi i kopjeve të fundit te librave me te shitur për të përmirësuar lëvizjen e librave në bibliotekë.
                            Përdoruesit do të kenë mundësi të zgjedhin nga një gamë e gjerë e librave dhe të eksplorojnë lloje të ndryshme të letërsisë.
                            Kjo ndihmon në rritjen e numrit të librave të huazuar, duke ndikuar në një eksperiencë më të pasur për përdoruesit.
                            </p>
                            <a href="about.php"><button class="btn text-light" style="background-color: rgb(11, 125, 125);">Read More</button></a>                        </div>
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