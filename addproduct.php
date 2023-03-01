
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
    <style>

        
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

        .container-form{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .container-form form{
            width: 700px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container-form form input{
            width: 300px;
            height: 40px;
            margin: 4px;
            text-transform: none;
            font-size: 16px;
            padding: 4px;
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
            <h3 class="title">Add Products</h3>

            <div class="container-form">
                <?php
                    $addProduct = $conn->addProduct();
                ?>
                <form action="addproduct.php" method="post">
                    <input type="text" required name="prod_name" placeholder="Product Name">
                    <input type="text" required name="prod_description" placeholder="Product Description">
                    <input type="number" required step="0.001" name="prod_price" placeholder="Product Price">
                    <input type="text" required name="prod_img" placeholder="Product Image URL">
                    <input type="submit" name="addproduct" value="Add Product" style="background-color: lightgreen; border:none; cursor:pointer;">
                    <input type="submit" name="cancelproduct" value="Cancel" style="background-color: lightcoral; border:none; cursor:pointer;">
                </form>
            </div>
        </div>
    </div>
</body>
</html>