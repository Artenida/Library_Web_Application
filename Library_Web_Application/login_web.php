<?php
    require("lidhja.php");
    session_start();
    $mesazh = "";

    if(isset($_POST['logohu'])){
        if(isset($_POST['email']) && isset($_POST['password'])){
            extract($_POST);
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $rezultati = mysqli_query($conn, $sql);
            $rresht = mysqli_fetch_array($rezultati); 
            $nr = mysqli_num_rows($rezultati);

            if($nr == 1 && password_verify($password, $rresht['password'])){
                $_SESSION['iLoguar'] = true;
                $_SESSION['Id_User'] = $rresht['Id_User'];
                $_SESSION['role'] = $rresht['role'];
                $_SESSION['username'] = $rresht['username'];
                $_SESSION['name'] = $rresht['name'];
                $_SESSION['lastname'] = $rresht['lastname'];
                $_SESSION['email'] = $rresht['email'];
                $_SESSION['tel'] = $rresht['phone'];
                if($rresht['role'] == "admin")
                    header("Location: admin_main_page.php");
                else
                    header("Location: home.php");
            } else {
                $mesazh = "Te dhenat tuaja nuk jane te sakta";
            }
        }
    }
    mysqli_close($conn);
?>


<?php
require_once "includes/header.php";
require_once "includes/top-menu.php";
?>
<link rel="stylesheet" href="css/user.css">
<link rel="stylesheet" href="css/style.css">

    <body>
    <section id="login">
        <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-6 login_part_text text-center position-relative">
                    <!-- Image container -->
                <div class="image-container">
                    <img src="images/library3.jpg" alt="login-image" class="img-fluid">
                    <!-- Text overlay -->
                    <div class="login_part_text_iner position-absolute top-50 start-50 translate-middle text-white">
                        <h2 style="color: white;">New to our Shop?</h2>
                        <p style="color: white;">Sign Up to experience the magic of books with a click!</p>
                        <a href="Regjistrohu.php" class="signUp-button btn_3">Create an Account</a>
                    </div>
                </div>
            </div>

                <div class="form-class col-lg-6 col-md-6 ">
                    <div class="inner-form shadow rounded">
                    <h3>Welcome Back ! <br> Please Sign in now</h3>
                       
                    <form action = "" method = "post" autocomplete="off">
                            
                        <!-- <div id="alert" class="alert alert-danger" role="alert"><?php echo $mesazh; ?></div> -->

                        <?php if (!empty($mesazh)) { ?>
                        <div id="alert" class="alert alert-danger" role="alert"><?php echo $mesazh; ?></div>
                            <?php } ?>

                            <div class="mb-3">
                                <label for="email" class = "form-label">Email: </label>
                                <input class = "form-control emri" type = "email" name = "email"/></p>
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class = "form-label">Password: </label>
                                <input class = "form-control emri" type = "password" name = "password"/></p>
                            </div>
                            <input class="btn btn-primary" type = "submit" name = "logohu" value = "Hyr" 
                                    style="background-color: rgb(11, 125, 125);
                                         border-color: rgb(11, 125, 125);
                                         padding: 2% 46%;"> <br/>
                            <!-- <p class = "forgot"><a href="kamHarruarFjalekalimin.php">Forgot password</a></p> -->
                        </form>
                    </div>
                </div>  
        </div>
        </div>
        </section>
    </body>


//<?php
//    if(isset($_POST['regjistrohu']))
//        header("Location: Regjistrohu.php");
//?>