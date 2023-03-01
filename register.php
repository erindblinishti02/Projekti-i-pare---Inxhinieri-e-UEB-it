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
            $addUser = $conn->addUser();
        ?>
        <form action="register.php" method="POST">
            <input type="text" placeholder="username" id="username" name="username" autocomplete="off">
            <input type="email" placeholder="email" id="email" name="email" autocomplete="off">
            <input type="password" placeholder="password" id="password" name="password" autocomplete="off">
            <label for="isadmin" style="color: white; text-transform:none; margin-top:5px ;margin-right:auto;">Are you admin?</label>
            <input type="checkbox" style="padding: 3px; height:18px; width:18px; margin-top:5px ;margin-right:auto; cursor: pointer;" name="isadmin" id="isadmin">
            <input type="submit" value="Create Account" name="submit" id="submit" >
            <p>Already have an account?<a href="login.php"> Log in here</a> </p>
        </form>
        
    </div>
</body>
</html>