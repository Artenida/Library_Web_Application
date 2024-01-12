
<?php 
session_start(); 
require_once "includes/admin/header.php";
require_once "includes/admin/top_menu.php";
?>

<div class = "butonat">
    <h1>Hello <?php 
                    echo $_SESSION['name'] ?>!</h1>
    <p>Have a wonderful day!</p>
    <ul>
        <li><a href = "add_new_admin.php">Shto admin</a></li>
        <li><a href = "add_new_category.php">Shto Kategorite</a></li>
        <li><a href = "add_book_page.php">Shto liber</a></li>
        <li><a href = "donation_report.php">Menaxho dhurimet</a></li>

    </ul>
</div>
</body>
</html>

