<?php
    session_start();
    
    if (isset($_SESSION["email"])){
        header('location: products.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
   <title>Login</title>
   <link href="styles/index.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="styles/bootstrap.css">
   <script src="styles/jquery.js"></script>
   <script src="styles/bootstrap.js"></script>
</head>

<body>

    <?php
       include 'includes/header.php';
    ?>


<div class="content">
    <div class="container" style="padding: 100px;width: 600px;">
        <div class="panel panel-primary">
            <div class="panel-heading">Login</div>
                <div class="panel-body">
                    <span class="text-warning">Login to make a purchase</span>
                    <br>
                    <br>
                    <form action="login_submit.php" method="POST">
                         <div class="form-group">
                             <input type="text" name="email" class="form-control" placeholder="Email">
                         </div>
                         <div class="form-group">
                             <input type="password" name="password" class="form-control" placeholder="Password">
                         </div>
                         <div class="form-group">
                             <input type="submit" name="submit" class="btn btn-primary btn-lg btn-shadow-blue" value="Login">
                         </div>
                         <br>
                    </form>
                    <div class="panel-footer"> Don't have an account? 
                        <a href="signup.php" class="navbar-link">Register</a>
                    </div>
               </div>
        </div>
    </div>
 </div>
    <?php
        include 'includes/footer.php';
     ?>
</body>
</html>