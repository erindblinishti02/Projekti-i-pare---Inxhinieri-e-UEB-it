
<?php
// here starts the header
include "includes/header.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projekti i pare - Inxhinieri e UEB-it</title>
    <link rel="stylesheet" href="../styles/style.css">

    <!-- Scripts -->
    <script src="index.js" defer></script>
    <script src="https://kit.fontawesome.com/3f3858291e.js" defer crossorigin="anonymous"></script>
    <!-- Scripts -->
</head>
    <body>
    <section class="products-section">
    <div class="products-section-title">
            <h2>Featured Products</h2>
        </div>
        <?php
            $showProducts = $conn->showProducts();
        ?>
        

    </section>
    </body>
</html>