<?php
    session_start();
    $mesazh = "";
    if(isset($_POST['send'])){
        $email = $_POST['email'];
        require ("lidhja.php");

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

            $to = $email;
            $subject = "Your password";
            $txt = "Your email password : $email is: $password";
            $headers = "From: daciartenida@gmail.com";

            mail($to, $subject, $txt, $headers);
        
            header("Location: login_web.php");
        } else {
            $mesazh =  "Email not found in the database";
        }
        
    }
?>

<?php
require_once "includes/header.php";
require_once "includes/top-menu.php";

?>
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

