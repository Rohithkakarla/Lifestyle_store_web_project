<?php
session_start();
if(isset($_SESSION["email"]))
{
    header('location:product.php');
}
?>

<!DOCTYPE html>
  <html>
    <head>
      <title>Sign up Page</title>
      <link href="styles/index.css" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="styles/bootstrap.css">
      <script src="styles/jquery.js"></script>
      <script src="styles/bootstrap.js"></script>
    </head>

     <body>
        <?php
           include 'includes/header.php';
        ?>

        <div class="content" >
            <div class="container" style="padding: 100px;width: 600px;">
            <h2>Sign up</h2>

            <div class="form-group">
                <form action="signup_script.php" method="POST" class="bg-white rounded ">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control " placeholder="Full name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control " placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control " placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="text" name="contact" class="form-control " placeholder="Contact">
                    </div>
                    <div class="form-group">
                        <input type="text" name="city" class="form-control " placeholder="City">
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control " placeholder="Address">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" class="btn btn-primary btn-lg btn-shadow-blue" value="Submit">
                    </div>
                </form>
                <br>
            </div>
            </div>
        </div>
    <?php
        include 'includes/footer.php';
     ?>
</body>
</html>