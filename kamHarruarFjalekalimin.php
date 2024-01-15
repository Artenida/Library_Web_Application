<?php
    session_start();
    require ("lidhja.php");

    $mesazh = "";

    if(isset($_POST['send'])){
        $email = $_POST['email'];

        // Check if the email exists in the database
        $check_sql = "SELECT * FROM users WHERE email = '$email'";
        $check_result = mysqli_query($conn, $check_sql);

        if(mysqli_num_rows($check_result) > 0) {
            // The email exists in the database, proceed to send the email
            $password_sql = "SELECT password FROM users WHERE email = '$email'";
            $password_result = mysqli_query($conn, $password_sql);

            if(!$password_result) {
                die("Nuk u krye");
            }

            $password = mysqli_fetch_row($password_result)[0];
            echo '<script>alert("Password retrieved from the database: ' . $password . '");
            window.location.href = "login_web.php";</script>';

     
            // header("Location: login_web.php");
        } else {
            $mesazh =  "Email not found in the database";
        }
        
    }
?>

<?php
require_once "includes/header.php";
require_once "includes/top-menu.php";
?>

<style>
    .nav-links ul li a ,.sign a{
	color: #ffffff;
	/** #ffffff ngjyra e bardhe e menuve*/
	text-decoration: none;
	font-size: 14px;
}

/*.sign a{
	color: #ffffff;
	text-decoration: none; *heq nenvizimin e link-ut*
	font-size: 14px;
}*/

.nav-links ul li::after, .sign a::after{
	/**kjo ben vizat e kuqe poshte menuve */
	content: '';
	width: 0%; /**nga 100% e beme 0% ne menyre qe vija e kuqe te jete e fshehur */
	height: 2px;
	background: #f44336;
	display: block;
	margin: auto;
	transition: 0.5s;
}

.nav-links ul li:hover::after, .sign a:hover::after{
	width: 100%;
}


.nav-links ul li a.active::after{
	content: '';
	width: 100%;
	height: 2px;
	background: #f44336;
	display: block;
	margin: auto;
}

</style>

<link rel="stylesheet" href="css/user.css">
    <body>
    <section class="forgot-password d-flex justify-content-center align-items-center" >
    <div class="container">
    <div class="forgot form-class border shadow p-3 rounded">
            <h3>Forgot Password!</h3>
        <form action = "" method = "post">
            
        <!-- <div id="alert" class="alert alert-danger" role="alert">
        <p style="color: black;
                    font-size: 10px">Note: You have to use the email address you are registered with!</p>    
        <?php echo $mesazh; ?></div> -->

        <?php if (!empty($mesazh)) { ?>
    <div id="alert" class="alert alert-danger" role="alert">
        <p style="color: black; font-size: 10px">Note: Duhet te vendosni adresen me te cilen jeni rregjistruar!</p>
        <?php echo $mesazh; ?>
    </div>
<?php } ?>



        <div class="mb-3">
                <label for="email" class = "form-label"
                        style="font-size: 15px;">Enter your email address: </label>
                <input  class = "form-control email" type="email" name="email" placeholder="Enter email address" required/></p>
            </div>
            <input class="btn btn-primary" type="submit" name="send" value="Send"
                    style="width: 100%;
                    background-color: rgb(11, 125, 125);">
        </form>
        </div>
    </div>
    </section>

<?php
require_once "includes/footer.php";
?>

