<?php
    include "includes/header.php";
    $product_id = $_GET['pid'];
    $deleteProd = $conn->deleteProduct($product_id);

    header("Location: dashboard.php");
?>