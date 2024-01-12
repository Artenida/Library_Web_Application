<?php
    session_start();
    $search = $_SESSION['search'];
?>

<link rel="stylesheet" href="css/style.css">
<!-- <link rel="stylesheet" href="spf_pet.css"> -->
<link rel="stylesheet" href="category_style.css">
<link rel="stylesheet" href="add_pet_page_style.css">

<body>
<?php
require_once "includes/header.php";
require_once "includes/top-menu.php";

?>
    <section class = "header">
        </div>   
    </section>
    <div class = "categories">
        <ul>
        <?php
            require ("lidhja.php");
            if($search == "special")
                $sql = "SELECT id, emri, rraca, foto FROM kafshet WHERE special = 1";
            else
                $sql = "SELECT id, emri, rraca, foto FROM kafshet WHERE lloji = '$search' OR emri = '$search' OR mosha = '$search' OR ngjyra = '$search' OR rraca = '$search' OR gjinia = '$search'";
            if(!($rez = mysqli_query($conn, $sql)))
                die("Nuk u realizua kerkesa");
            $variablat = "";
            while($rresht = mysqli_fetch_row($rez)) {
//                $rresht[3] = 'data:image/;base64,' . base64_encode($rresht[3]);
                echo "<li><div class = 'categories-col'><button type='submit' name='$rresht[0]'><img src='$rresht[3]' alt='Image' style='width: 200px; height: 250px'><br>Emri: $rresht[1]<br>Rraca: $rresht[2] </button></div></li>";
                $variablat = $variablat . $rresht[0] . " ";
    //                echo '<img src="data:image/gif;base64,' . $data . '" />';
            }
        ?>
        </ul>
    </div>
        </form>

<?php
require_once "includes/footer.php";

?>
    </body>
>
<?php
    $variablat = explode(" ", $variablat);
    foreach ($variablat as $vlere)
        if(isset($_POST[$vlere])) {
            $_SESSION['vlera'] = $vlere;
            header("Location: libriSpecifik.php");
        }

    if(isset($_POST['kerkim'])) {
        $_SESSION['search'] = $_POST['search'];
        header("Location: search.php");
    }
?>