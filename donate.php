<?php
    session_start();
    require ("lidhja.php");
    $mesazh = "";
    $name = $_SESSION['name'];
    $lastname = $_SESSION['lastname'];
    $email = $_SESSION['email'];
    $telefon = $_SESSION['tel'];
?>

    <?php
require_once "includes/header.php";
require_once "includes/top-menu.php";
?>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/donate.css">

<style>
    span {
        font-size: 10px;
    }
</style>

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
                    <form action="donate_form.php" method="post">

                        <div class="mb-3">
                            <label for="description" class="form-label">Emri:</label>
                            <input class = "form-control" type = "text" name="name" value="<?php echo $name ?>" required/>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Mbiemri:</label>
                            <input class = "form-control" type = "text" name="lastname" value="<?php echo $lastname ?>" required/>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Email:</label>
                            <input class = "form-control" type = "text" name="email" value="<?php echo $email ?>" required/>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Numri i telefonit:</label>
                            <input class = "form-control" type = "text" name="nr_tele" value="<?php echo $telefon ?>" required/>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Titulli i librit:</label>
                            <input class = "form-control" type = "text" id="title" name="title" required/>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Autori:</label>
                            <input class = "form-control" type = "text" id="author" name="author" required/>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Kategoria se ciles i perket:</label>
                            <input class = "form-control" type = "text" id="category" name="category" required/>
                        </div>

                        <div class="mb-3">
                            <label for="name" class="form-label">Caktoni daten per takim:</label>
                            <input class="form-control" id="date" type="text" name="date" >
                            <span>Note: Data duhet te jete viti.muaji.dita</span>
                        </div>
                        
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary" name="submit"
							style="background-color: rgb(11, 125, 125);
							border: none;
							padding: 2% 45%;">Dhuro</button>
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
require_once "includes/footer.php";
?>


                        