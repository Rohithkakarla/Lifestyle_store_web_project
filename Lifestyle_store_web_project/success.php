<?php
    include 'includes/common.php';
    
    if (isset($_SESSION['email'])){
        $uid=$_SESSION["id"];
        $change="UPDATE users_items SET status='Confirmed' WHERE user_id='$uid'";
        $pdo = connection_database();
        $pdo->query($change);
    }
    else{
        header('location: products.php');
    }
?>

<!DOCTYPE HTML>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="styles/bootstrap.css" rel="stylesheet">
        <script src="stylesbootstrap.js"></script>
        <link href="styles/index.css" rel="stylesheet" type="text/css"/>

        <title>Success</title>
    </head>
   
    <body>
        
        <?php
            include 'includes/header.php';
        ?>

        <div id="background">
            <div class="container" style="margin:auto" align="center">
                <div id="bg-content">
                    <h1>Your Order is confirmed</h1>
                    <p>Thank you for shopping with us. <a href="products.php" class="btn btn-primary">Click here</a> to purchase any other item.</p><br>
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>

</html>