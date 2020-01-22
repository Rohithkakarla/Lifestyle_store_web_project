<?php
    include 'includes/common.php';
    if(isset($_SESSION["email"])){
        $uid=$_SESSION["id"];
        if(isset($_GET["id"])){
            $item_id=$_GET["id"];
            $sql="DELETE FROM users_items WHERE user_id='$uid' AND item_id='$item_id'";
            $pdo = connection_database();
            $pdo->query($sql);
            header("location: cart.php");
        }
        else{
            header("location: cart.php");
        }
    }
    else{
        header("location: index.php");
    }
?>