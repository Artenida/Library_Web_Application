<html>
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
     integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Roboto+Slab:wght@300&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/category.css">
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<?php
    require_once "includes/header.php";
    require_once "includes/top-menu.php";
    require ("lidhja.php");
?>

<body>   
 <section id="categories" >
    <div class="container categories">
        <div class="row categories-header">
            <div class="col-md-12">
                <div class="section-header text-center pb-5">
                    <h2 class="text-center mb-5">Shfletoni faqet e bibliotekes sone</h2>
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
                <div class="card text-white text-center bg-light pb-2" id="aventure">
                    <div class="card-body d-flex justify-content-center">
                        <button class="btn btn-sm custom-button" ><a href="specific_category.php?catName=<?php echo urlencode ("Aventure");?>"> Aventure </a><br/></button>
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
                        <button class="btn btn-sm custom-button" ><a href="specific_category.php?catName=<?php echo urlencode ("Historik");?>"> Historik </a><br/></button>
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


<?php  require_once "includes/footer.php"; ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
 
    </body>
</html>