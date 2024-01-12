<?php
    session_start();
    require("lidhja.php");
    require ("kushte.php");
    $mesazhi = "";
    $konkluzione = "";

    function isUserRegistered($conn, $username, $email) {
        $sql_check = "SELECT * FROM users WHERE username = '$username' AND email = '$email'";
        $result_check = mysqli_query($conn, $sql_check);

        if ($result_check) {
            $num_rows = mysqli_num_rows($result_check);
            return $num_rows > 0; // If there are rows, the user is already registered
        } else {
            return false;
        }
    }


    if(isset($_POST['regjistrohu'])){
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password_k']) && isset($_POST['email'])){
            extract($_POST);
            jepVlere();
            if(isUserRegistered($conn, $username, $email)){
                $mesazhi = "Ky perdorues eshte i rregjistruar!";
            }
            if(!isUserRegistered($conn, $username, $email)) {
                $default_role = "user";
                $sql_1 = "INSERT INTO users (username, password, name, lastname, email, phone, role) 
                VALUES('$username', '$password' , '$name', '$lastname', '$email', '$phone', '$default_role')";
                if(!kusht($konkluzione) || !($rezultati1 = mysqli_query($conn, $sql_1)))
                    $mesazhi = "Te dhenat tuaja nuk u ruajten";     // ose nese duam te shkojme te faqja login.php :header("Location:login.php");
                else{
                    header("Location: login_web.php");
            }
        }
    }
    }
    function jepVlere(){
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['lastname'] = $_POST['lastname'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['phone'] = $_POST['phone'];

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
    <section id="signup">
        <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
                <div class="form-class col-lg-6 col-md-6">
                    <div class="inner-form border shadow p-3 rounded">
                    <h3>Hey, Ckemi! <br> Behu pjese e familjes tone me poshte!</h3>

                    <form action="#" method="post" autocomplete="off">
                    <!-- <p class = "name"><label for="username" class="form-label username">Username: </label>
                        <input class = "form-control username"  type="text" name="username" value=""></p>
                     -->
                     <p class = "name" style="color: black;"><label>Emri i perdoruesit: </label>
                        <input class = "emri"  type="text" name="username" value="<?php if(isset($_SESSION['username'])) echo $_SESSION['username'];?>" required/></p>

                    <p class = "name" style="color: black;"><label>Fjalekalimi::</label>
                        <input class = "emri" type="password" name="password" required/></p>
                    
                    <p class = "name" style="color: black;"><label> Konfirmo fjalekalimin: </label>
                        <input class = "emri" type="password" name="password_k" required/></p>

                    <p class = "name" style="color: black;"><label>Emri: </label>
                        <input class = "emri" type="text" name="name" value="<?php if(isset($_SESSION['name'])) echo $_SESSION['name'];?>"></p>

                    <p class = "name" style="color: black;"><label>Mbiemri: </label>
                        <input class = "emri" type="text" name="lastname" value="<?php if(isset($_SESSION['lastname'])) echo $_SESSION['lastname'];?>"></p>

                    <p class = "name"style="color: black;"><label>Email: </label>
                        <input class = "emri" type="email" name="email" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'];?>" required/></p>

                    <p class = "name" style="color: black;"><label>Telefoni: </label>
                        <input class = "emri" type="text" name="phone" value="<?php if(isset($_SESSION['phone'])) echo $_SESSION['phone'];?>" required/></p>
                        <input class="btn btn-primary" type="submit" value="Regjistrohu" name="regjistrohu" class="buton" onclick="start()"
                    style="background-color: rgb(11, 125, 125);
                    border-color: none;
                            padding: 2% 10%;"> 
                    <br>
                    <div class="alert alert-danger" role="alert" >
                    <p style="font-size: 10px;
                            color: black;
                            padding-bottom: 0;">Note: password must have 8 characters, at least one upper case, one number and one special character!</p>
                        <?php echo $konkluzione;?>
                    </div>
              
                    <div style="color: red;"><?php echo $mesazhi ?></div>
                </form>
                </div>  
                </div>

                <div class="col-md-6 login_part_text text-center position-relative">
                <!-- Image container -->
                <div class="image-container">
                    <img src="images/home-page1.jpg" alt="login-image" class="img-fluid">
                    <!-- Text overlay -->
                    <div class="login_part_text_iner position-absolute top-50 start-50 translate-middle text-white">
                        <h2 style="color: white;">Already a member?</h2>
                        <p style="color: white;">You just need to log in to experience the magic of books</p>
                        <a href="login_web.php" class="signUp-button btn_3">Log In</a>
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
