
<link rel="stylesheet" href="css/category.css">
<link rel="stylesheet" href="css/style.css">


<?php
session_start();
    // Header
    require_once "includes/header.php";
    // Menu
    require_once "includes/top-menu.php";
?>
  <?php
           require ("lidhja.php");
                        
    ?> 

<body >          
<section id="categories" class="categories">
    <div class="container" id="categories">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2 class="text-center mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, nostrum!</h2>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-between">
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-white text-center bg-light pb-2" id="romance">
                    <div class="card-body d-flex justify-content-center">
                        <button class="btn btn-sm custom-button" ><a href="specific_category.php?catName=<?php echo urlencode("Romance"); ?>"> Romance </a></button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-white text-center bg-light pb-2" id="komedi">
                    <div class="card-body d-flex justify-content-center">
                        <button class="btn btn-sm custom-button" ><a href="specific_category.php?catName=<?php echo urlencode("Komedi"); ?>"> Komedi </a></button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-white text-center bg-light pb-2" id="thriller">
                    <div class="card-body d-flex justify-content-center">
                        <button class="btn btn-sm custom-button" ><a href="specific_category.php?catName=<?php echo urlencode ("Thriller");?>"> Thriller </a><br/></button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-white text-center bg-light pb-2" id="aksion">
                    <div class="card-body d-flex justify-content-center">
                        <button class="btn btn-sm custom-button" ><a href="specific_category.php?catName=<?php echo urlencode ("Aksion");?>"> Aksion </a><br/></button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-white text-center bg-light pb-2" id="BestSeller">
                    <div class="card-body d-flex justify-content-center">
                        <button class="btn btn-sm custom-button"><a href="specific_category.php?catName=<?php echo urlencode ("Best Seller");?>"> Best Seller </a><br/></button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-white text-center bg-light pb-2" id="historik">
                    <div class="card-body d-flex justify-content-center">
                        <button class="btn btn-sm custom-button" ><<a href="specific_category.php?catName=<?php echo urlencode ("Historik");?>"> Historik </a><br/></button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-white text-center bg-light pb-2" id="Mister">
                    <div class="card-body d-flex justify-content-center">
                        <button class="btn btn-sm custom-button" ><a href="specific_category.php?catName=<?php echo urlencode ("Mister");?>"> Mister </a><br/></button>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card text-white text-center bg-light pb-2" id="fantazi">
                    <div class="card-body d-flex justify-content-center">
                        <button class="btn btn-sm custom-button" ><a href="specific_category.php?catName=<?php echo urlencode ("Fantazi");?>"> Fantazi </a><br/></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


    <?php
    require_once "includes/footer.php";
    ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="script.js"></script>
                              </body>
                              </html>