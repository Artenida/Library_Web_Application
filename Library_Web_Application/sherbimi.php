<?php
    session_start();
    require ("lidhja.php");
    $mesazh = "";
    $name = $_SESSION['name'];
    $lastname = $_SESSION['lastname'];
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
                <form action="sherbimi_form.php" method="post">

                        <div class="mb-3">
                            <label for="description" class="form-label">Emri:</label>
                            <input class = "form-control" type = "text" name="name" value="<?php echo $name ?>" required/>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Mbiemri:</label>
                            <input class = "form-control" type = "text" name="lastname" value="<?php echo $lastname ?>" required/>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Si do e pershkruanit ne menyre te pergjithshme eksperincen tuaj ne biblioteke?</label>
                            <textarea class = "form-control" type = "text" id="pyetja1" name="pyetja1"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">A ishte stafi yne i gatshem per t'ju ndihmuar?</label>
                            <textarea class = "form-control" type = "text" id="pyetja2" name="pyetja2"></textarea>                        
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">A kishte stafi mjaftueshem njohuri mbi ate qe ju po kerkoni?</label>
                            <textarea class = "form-control" type = "text" id="pyetja3" name="pyetja3"></textarea>                        
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">A e gjetet librin te cilin po kerkonit dhe burime te tjera te ngjashme?</label>
                            <textarea class = "form-control" type = "text" id="pyetja4" name="pyetja4"></textarea>                        
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">A patet ndonje veshtirese dhe a mendon se ka dicka qe mund te permiresohet?</label>
                            <textarea class = "form-control" type = "text" id="pyetja5" name="pyetja5"></textarea>                        
                        </div>

                        <div class="mb-3">
        <label class="form-label">Vlereso Biblioteken:</label>
        <div>
            <input type="radio" id="vleresimi" name="vleresimi" value="1">
            <label for="rating1" style="margin-right: 10px;">1</label>

            <input type="radio" id="vleresimi" name="vleresimi" value="2">
            <label for="rating2" style="margin-right: 10px;">2</label>

            <input type="radio" id="vleresimi" name="vleresimi" value="3">
            <label for="rating3" style="margin-right: 10px;">3</label>

            <input type="radio" id="vleresimi" name="vleresimi" value="4">
            <label for="rating4" style="margin-right: 10px;">4</label>

            <input type="radio" id="vleresimi" name="vleresimi" value="5">
            <label for="rating5" style="margin-right: 10px;">5</label>
        </div>
    </div>

    <div class="mb-3 text-center">
        <button type="submit" class="btn btn-primary" name="submit" style="background-color: rgb(11, 125, 125);
            border: none;
            padding: 2% 45%;">Dergo</button>
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


                        