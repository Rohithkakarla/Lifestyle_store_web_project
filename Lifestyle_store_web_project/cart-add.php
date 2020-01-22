<?php
    $item=$_GET["id"];
    include 'includes/common.php';
    
    $query = "INSERT INTO users_items (user_id,item_id,status) VALUES (?, ?, ?)";
    
    $pdo = connection_database();
    $stmt = $pdo->prepare($query);
    $status="Added to cart";
    $stmt->execute([$_SESSION["id"],$item,$status]);
    header("location: products.php");
?>