<?php include "includes/header.php";?>
<?php
    if(isset($_SESSION['username'])){
        header("Location: dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="/styles/users.css">
</head>
<body>
    <div class="form-container">
    <?php
            $login_function = $conn->loginUser();
        ?>
        <form action="" method="POST">
            <input type="text" placeholder="username" id="username" name="username">
            <input type="password" placeholder="password" id="password" name="password">
            <input type="submit" value="Log In" name="submit" id="submit">
            <p>If you don't have an account, <a href="register.php">register here</a> </p>
        </form>
        
    </div>
</body>
</html>


