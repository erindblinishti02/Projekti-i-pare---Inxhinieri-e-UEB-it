<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../styles/style.css">
    <script src="https://kit.fontawesome.com/3f3858291e.js" defer crossorigin="anonymous"></script>
</head>
<body>
<header>
        <div class="navbar">
            <div class="nav-logo">
                <h2>Logo</h2>
            </div>
            <div class="nav-list">
                <a href="../index.php">Home</a>
                <a href="../shop.php">Shop</a>
                <a href="../about.php">About</a>
                <a href="../contact.php">Contact</a>
            </div>
            <div class="nav-info">
                <a href="login.php" style="color:white"><h4><i class="fa-solid fa-user"></i></i></h4></a>
                <a href="cart.php" style="color:white"><h4><i class="fa-solid fa-cart-shopping" id="cart"></i></h4></a>
            </div>
        </div>
    </header>
</body>
</html>

<?php
    include "config.php";
    $conn = new Model();
    // print_r($conn->$connection);
?>