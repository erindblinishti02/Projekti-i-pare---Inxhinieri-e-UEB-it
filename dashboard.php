
<?php
include "includes/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="/styles/style.css">
    <script src="https://kit.fontawesome.com/3f3858291e.js" defer crossorigin="anonymous"></script>
    <style>
        /* table styling */

                table {
        border-collapse: collapse;
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        margin-top: 20px;
        
        }

        th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        text-transform: none;
        }

        th {
        background-color: #f2f2f2;
        font-weight: bold;
        }

        tr:nth-child(even) {
        background-color: #f2f2f2;
        }

        .trashcan{
            color:  #ee5253;
        }

        .del-column{
            width: 70px;
            text-align: center;
        }

        
        .container{
            
            display: flex;
            flex-direction: row;
            height: 100vh;  
            width: 100%;          
        }

        .col-1{
            padding: 20px;
            padding-top: 40px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: 20%;
        }

        .col-2{
            padding: 20px;
            padding-top: 40px;
            display: flex;
            flex-direction: column;
            width: 80%;
            border-left: 1px solid black;
            text-transform: none;
        }

        .col-1 a{
            margin-top: 30px;
            padding: 8px 8px;
            color: #333;
            text-decoration: none;
            border: 1px solid black;
            text-transform: none;
        }

        .col-1 a:hover{
            background-color: black;
            color: white;
            transition: .4s;
        }

        .col-2 a{
            color: lightskyblue;
            text-transform: none;
            padding: 4px 0px;
        }

        p{
            text-transform: none;
        }

        .title{
            font-size: 32px;
            text-align: center;
            padding: 8px 16px;
            margin-top: 35px;
        }

    </style>
</head>
<body>
    <div class="container">
        <?php
                    $showProd = $conn->getAdminRole();
        ?>      
        <div class="col-1"> 
                <?php if($_SESSION['is_admin'] == "0") : ?>
                    <a href="dashboard.php">My Products</a>
                    <a href="editpassword.php">Edit Password</a>
                    <a href="logout.php">Log Out</a>
                <?php else : ?>
                    <a href="dashboard.php">My Products</a>
                    <a href="addproduct.php">Add Product</a>
                    <a href="editpassword.php">Edit Password</a>
                    <a href="logout.php">Log Out</a>
                <?php endif;?>           
        </div>
        <div class="col-2">
            <?php
                $username = $_SESSION['username'];
                // echo "Hello, <a href='dashboard.php'>$username</a>";
                echo "<p>Hello, <a href='dashboard.php'>$username</a>. Not you? Log out <a href='logout.php'>here</a></p>";
                echo '<h3 class="title">Here are your products</h3>';
            ?>
                    
            <?php
                $showProducts = $conn->showMyProducts();
            ?>
        </div>
    </div>
</body>
</html>