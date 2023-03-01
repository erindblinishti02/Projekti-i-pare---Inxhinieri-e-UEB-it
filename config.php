<?php

class Model{
     private $host = "localhost";
     private $dbname = "iew";
     private $user = 'root';
     private $password = '';
     private $connection;
     

     public function __construct(){
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbname;", $this->user, $this->password);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
     }

     public function addUser(){
        if(isset($_POST['submit'])){

            if($_POST['username'] == '' || $_POST['email'] == '' || $_POST['password'] == ''){
                echo "<script>alert('All fields are required')</script>";
            }else{
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $pass_hashed = password_hash($password, PASSWORD_DEFAULT);
                $is_admin = $_POST['isadmin'];
                $query = "";
                if(isset($is_admin)){
                    $query = "INSERT INTO `users`(username, email, mypassword, is_admin) VALUES ('$username','$email', '$pass_hashed', '1')";
                }else{
                    $query = "INSERT INTO `users`(username, email, mypassword) VALUES ('$username','$email', '$pass_hashed')";    
                }

                if ($sql = $this->connection->query($query)) {
                    
                    // $_SESSION['username'] = $username;
                    echo "<script>alert('You are registered successfully. Please login with your credentials again.');</script>";
                    // header("Location: index.php");
                    echo "<script>window.location.href = 'login.php';</script>";
                }else{
                    echo "<script>alert('Something went wrong');</script>";
                    echo "<script>window.location.href = 'index.php';</script>";
                }  
            }

           
        }
     }

     public function getAdminRole(){
        $username = $_SESSION['username'];
        $sql = $this->connection->query("SELECT * FROM `users` where username = '$username'");
        $sql->execute();

        $data = $sql->fetch(PDO::FETCH_ASSOC);

        $_SESSION['is_admin'] = $data['is_admin'];

     }

     public function loginUser(){
        if(isset($_POST['submit'])){
            if($_POST['username'] == '' or $_POST['password'] == ''){
                echo "<script>alert('All fields are required')</script>";
            }else{
                $username = $_POST['username'];
                $password = $_POST['password'];
    
                $sql = $this->connection->query("SELECT * FROM `users` where username = '$username'");
                $sql->execute();
    
                $data = $sql->fetch(PDO::FETCH_ASSOC);
    
                if($sql->rowCount() > 0){
                    if(password_verify($password, $data['mypassword'])){
                        echo "<script>alert('Login Success')</script>";
                        $_SESSION['userid'] = $data['id'];
                        $_SESSION['username'] = $username;
                        echo "<script>window.location.href = 'index.php';</script>";
                    }else{
                        echo "<script>alert('Incorrect username or password')</script>";
                    }
                    // header("Location: index.php");
                    
                }else{
                    echo "<script>alert('Incorrect username or password')</script>";
                }
            }
        }
     }

     public function resetPassword(){
        if(isset($_POST['submit'])){
            if($_POST['currentPassword'] == '' or $_POST['newPassword'] == ''){
                echo "<script>alert('You have not completed both fields')</script>";
            }else{
                $username = $_SESSION['username'];
                $currentPassword = $_POST['currentPassword'];
                $newPassword = $_POST['newPassword'];
                $newPassword_hashed = password_hash($newPassword, PASSWORD_DEFAULT);
                $sql = $this->connection->query("SELECT * FROM `users` where username = '$username'");
                $sql->execute();
    
                $data = $sql->fetch(PDO::FETCH_ASSOC);
                if(password_verify($currentPassword, $data['mypassword'])){
                    $query = "UPDATE `users` SET mypassword = '$newPassword_hashed' WHERE username = '$username'";
                    $currentPassword = $newPassword;
                    if($sql = $this->connection->query($query)){
                        echo "<script>alert('Password updated successfully');</script>";
                        echo "<script>window.location.href = 'edit.php';</script>";
                    }
                }else{
                        echo "<script>alert('This is not your password');</script>";
                        echo "<script>window.location.href = 'edit.php';</script>";
                }
                    // if ($sql = $this->connection->query($query)) {
                    //     echo "<script>alert('Password updated successfully');</script>";
                    //     // header("Location: index.php");
                    //     echo "<script>window.location.href = 'edit.php';</script>";
                    // }else{
                    //     echo "<script>alert('Something went wrong');</script>";
                    //     echo "<script>window.location.href = 'index.php';</script>";
                    // }

                
            }
        }
     }

     public function addProduct(){
        // if(isset($_GET['addproduct'])){
        //     if($_GET['prod_name'] = '' or $_GET['prod_description'] = '' or $_GET['prod_price'] = ''){
        //         echo "<script>All details of product are required</script>";
        //     }
        // }
        if(isset($_POST['addproduct'])){
            $product_name = $_POST['prod_name'];
            $product_description = $_POST['prod_description'];
            $product_price = $_POST['prod_price'];
            $product_image_url = $_POST['prod_img'];
            $userid = $_SESSION['userid'];

            $query = "INSERT INTO `products` (prod_name, prod_description, prod_price, added_by, prod_img) VALUES ('$product_name', '$product_description', '$product_price', '$userid', '$product_image_url')";
            if($sql = $this->connection->query($query)){  
                echo "<script>alert('Product $product_name successfully added')</script>";
            }
            
        }

     }

     public function showMyProducts(){
        $userid = $_SESSION['userid'];
        $sql = "SELECT * FROM `products` WHERE added_by = $userid";
        $query = $this->connection->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        // print_r($result);
        
        // Check if there are any products to display
        if (count($result) > 0) {
            // Output the products in an HTML table
            echo "<table>";
            echo "<thead><tr><th>Product Name</th><th>Product Description</th><th>Product Price</th><th>Actions</th></tr></thead>";
            echo "<tbody>";
            foreach ($result as $row) {
                $product_id = $row["product_id"];
                echo "<tr>";
                echo "<td>" . $row["prod_name"] . "</td>";
                echo "<td>" . $row["prod_description"] . "</td>";
                echo "<td>" . "€ " . $row["prod_price"] .  "</td>";
                echo "<td class='del-column'>" . "<a href='deleteproduct.php?pid=$product_id'><i class='trashcan fa-solid fa-trash'></i></a>" . "</td>";                
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        } else {
            echo "No products found.";
        }
        // $allproducts = $this->connection->query($sql);

        // if($allproducts->rowCount() > 0){
        //     while($row = $allproducts->fetch()){
        //         // echo "<tr><td>" . $row['prod_name'] . "</td><td>" . $row['prod_description'] . "</td><td>" . $row['prod_price'] . "</td><tr>";
        //         echo "</h3>Success</h3>";
        //     }
        // }else{
        //     echo "There are no results";
        // }

     }

     public function deleteProduct($pid){
        $query = "DELETE FROM products WHERE product_id = $pid";
            if($sql = $this->connection->query($query)){  
                echo "<script>alert('Product successfully deleted')</script>";
            }
     }

     public function showFeaturedProducts(){
        $sql = "SELECT * FROM products LIMIT 3";
            $stmt = $this->connection->query($sql);

                // Display the products in HTML boxes
            echo "<div class='product-container'>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='product-box'>";
                echo "<img src='" . $row['prod_img'] . "' alt='" . $row['prod_img'] . "'>";
                echo "<h3>" . $row['prod_name'] . "</h3>";
                echo "<p>" . $row['prod_description'] . "</p>";
                echo "<span class='price'>" . $row['prod_price'] . " €</span>" . "<br>";
                echo "<a href='add_to_cart.php?id=" . $row['product_id'] . "'>Add to cart</a>";
                echo "</div>";
            }
            echo "</div>";

     }

     public function showProducts(){
        $sql = "SELECT * FROM products";
            $stmt = $this->connection->query($sql);

                // Display the products in HTML boxes
            echo "<div class='product-container'>";
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<div class='product-box'>";
                echo "<img src='" . $row['prod_img'] . "' alt='" . $row['prod_img'] . "'>";
                echo "<h3>" . $row['prod_name'] . "</h3>";
                echo "<p>" . $row['prod_description'] . "</p>";
                echo "<span class='price'>" . $row['prod_price'] . " €</span>" . "<br>";
                echo "<a href='add_to_cart.php?id=" . $row['product_id'] . "'>Add to cart</a>";
                echo "</div>";
            }
            echo "</div>";

     }
}
   


?>