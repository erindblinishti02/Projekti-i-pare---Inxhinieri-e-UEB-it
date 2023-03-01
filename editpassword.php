
<?php
include "includes/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            justify-content: center;
            align-items: center;
            width: 80%;
            border-left: 1px solid black;
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

        .edit-container{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 400px;
            padding: 30px 80px;
            transform: scale(1.3);
        }

        .edit-container form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .edit-container h4{
            margin: 10px;
        }

        .edit-container form input{
            padding: 4px 8px;
            height: 30px;
            width: 200px;
            margin: 10px;
        }

        .edit-container form input::placeholder{
            text-transform: none;
            font-size: 12px;
        }

        #submit{
            background-color: rgb(45, 118, 149);
            border: 0.5px solid black;
            color: white;
            text-transform: uppercase;
            font-size: 10px;
            cursor: pointer;
            transition: .4s;
            margin: 10px 0px;
        }

        #submit:hover{
            background-color: rgb(34, 72, 89);
            color: #fff;
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
                    <a href="edit.php">Edit Password</a>
                    <a href="logout.php">Log Out</a>
                <?php else : ?>
                    <a href="dashboard.php">My Products</a>
                    <a href="addproduct.php">Add Product</a>
                    <a href="edit.php">Edit Password</a>
                    <a href="logout.php">Log Out</a>
                <?php endif;?>
        </div>
        <div class="col-2">
            <div class="edit-container">
                <h4>Reset Your Password</h4>
                <?php
            $resetPassword = $conn->resetPassword();
                 ?>
                <form action="edit.php" method="post">
                    <input type="password" placeholder="Your current password" name="currentPassword">
                    <input type="password" placeholder="Your new password" name="newPassword">
                    <input type="submit" value="Reset" name="submit" id="submit">
                </form>
            </div>
        </div>
    </div>
</body>
</html>