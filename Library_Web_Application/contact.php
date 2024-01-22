<?php
    session_start();
    require ("lidhja.php");

    include_once ("includes/header.php");
    include_once ("includes/top-menu.php");

    $mesazh = "";
    $name = $_SESSION['name'];
    $lastname = $_SESSION['lastname'];
    $telefon = $_SESSION['tel'];
?>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kontakto me ne</title>
        <link rel="stylesheet" href="css/style.css">

        <style>
    span {
        font-size: 10px;
    }

    .form-control {
        width: 100%;
    }
</style>
    </head>
    <body>
    <section class="donator">
    <div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    <h1 class="text-center">Te dhenat e perdoruesit</h1>
                </div>
                <div class="card-body">
                    <form action="contact_form.php" method="post">

                        <div class="mb-3">
                            <label for="description" class="form-label">Emri:</label>
                            <input class = "form-control" type = "text" name="name" value="<?php echo $name ?>" required/>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Mbiemri:</label>
                            <input class = "form-control" type = "text" name="lastname" value="<?php echo $lastname ?>" required/>
                        </div>
<!-- 
                        <div class="mb-3">
                            <label for="description" class="form-label">Email:</label>
                            <input class = "form-control" type = "text" name="email" value="<?php echo $email ?>" required/>
                        </div> -->

                        <div class="mb-3">
                            <label for="description" class="form-label">Titulli i librit:</label>
                            <input class = "form-control" type = "text" id="title" name="title" required/>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Caktoni daten per takim:</label>
                            <input class="form-control" id="date" type="text" name="date" >
                            <span>Note: Data duhet te jete YYYY.MM.DD</span>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Caktoni oren per takim:</label>
                            <input class="form-control" id="time" type="time" name="time" >
                            <span>Orari i librarise: 08:00am to 8:00pm</span>

                        </div>
                        
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary" name="submit"
							style="background-color: rgb(11, 125, 125);
							border: none;
							padding: 2% 45%;">Kontakto</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </section> 
    </body>

<?php
    include_once "includes/footer.php";
?>
	
  

                        