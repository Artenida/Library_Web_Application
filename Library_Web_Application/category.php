<?php session_start(); 
    require_once "includes/header.php";
    require_once "includes/top-menu.php";
    require ("lidhja.php");
    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategoritë e Librave</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            margin: 20px;
        }

        .category-card {
            width: 300px;
            margin: 10px;
            position: relative;
        }

        .category-image {
            max-width: 300px;
            max-height: 150px;
            object-fit: cover;
        }

        .category-details {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: black; 
        }

    </style>
</head>
<body>

<div class="container">
    <h2>Kategoritë e Librave</h2>

    <div class="row">
        <?php
        $sql = "SELECT * FROM kategorite";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

                $imagePath = 'images/kategori/' . $row["FotoPath"];
                ?>

                <div class="col-md-4">
                    <div class="card category-card">
                        <img src="<?php echo $imagePath; ?>" class="card-img-top category-image" alt="<?php echo $row["Kategoria"]; ?>">
                        <div class="category-details">
                            <h5><?php echo $row["Kategoria"]; ?></h5>
                            <div class="card-body">
                                <a href="specific_category.php?catName=<?php echo urlencode($row["Kategoria"]); ?>" class="btn btn-primary">Shiko Librat</a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
            }
        } else {
            echo 'Nuk ka kategori të disponueshme.';
        }
        ?>
    </div>
</div>
<?php 
include_once ("includes/footer.php");
?>
</body>
</html>