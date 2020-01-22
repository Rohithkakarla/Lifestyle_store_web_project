<?php
    include 'includes/common.php';
    if (isset($_SESSION["email"])){

    }
    else{
        header("location: index.php");
    }
?>
<!DOCTYPE HTML>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link href="styles/index.css" rel="stylesheet" type="text/css"/>

        <title>Lifestyle Store - Settings</title>
    </head>

    <body>
        
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href = "cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart</a></li>
                        <li><a href = "products.php"><span class="glyphicon glyphicon-th-list"></span>Products</a></li>
                        <li><a href = "logout_script.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
          
        <div class="panel-primary container panel-body">
            <form action="settings_script.php" method="POST" class="bg-white rounded ">
                <div class="col-md-6 col-md-offset-3">
                    <h2>Change Password</h2>
                    <div class="form-group"><input type="password" name="password" class="form-control" placeholder="Old Password"></div>
                    <div class="form-group"><input type="password" name="password_new" class="form-control" placeholder="New Password"></div>
                    <div class="form-group"><input type="password" name="password_confirm" class="form-control" placeholder="Re-type New Password"></div>
                    <div class="form-group"><input type="submit" name="submit" class="btn btn-primary btn-lg btn-shadow-blue" value="Change"></div>
                </div>
            </form>
        </div>

        <?php 
          include 'includes/footer.php';
        ?>

    </body>
</html>