<?php
//session_start();
?>
<!DOCTYPE html>
<head>
    <title>Product Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="styles/index.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="styles/bootstrap.css">
    <script src="styles/jquery.js"></script>
    <script src="styles/bootstrap.js"></script>
</head>

<body>
    <?php
        include 'includes/header.php'
    ?>
    <?php
       include 'check-if-added.php';
    ?>

   <br>
   <br>
    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p>We have the best cameras, watches and shirts for you.No need to hunt around,we have all in one place.</p>
        </div>

        <div class = "row" class = "text-center">
        <table>
            <tr>
                <td>
                    <tr class="text-center">
                        <div class="col-md-3" class="col-sm-6"> 
                            <div class="thumbnail">
                                <img src="images\Cannon EOS.jpg">
                                <div class="caption">
                                    <h3>Cannon EOS</h3>
                                    <p>Price:Rs 36000.00</p>
                                    <?php
                                        if(isset($_SESSION["email"]))
                                         {
                                          if(check_if_added_to_cart("1")==1)
                                           {
                                    ?>
                                            <a class="btn btn-success btn-block disabled" href="">
                                                <span class="glyphicon glyphicon-shopping-cart"></span>Added to cart
                                            </a>
                                    <?php
                                           }
                                          else
                                           {
                                    ?>
                                            <a class="btn btn-primary btn-block" href="cart-add.php?id=1">
                                                <span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart
                                            </a>
                                    <?php
                                           }
                                         }
                                        else
                                        {
                                    ?>
                                        <a class="btn btn-primary btn-block" href="login.php">
                                            <span class="glyphicon glyphicon-shopping-cart"></span>Buy Now
                                        </a>
                                    <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </tr>
                </td>

                <td>
                    <tr class="text-center">
                        <div class="col-md-3" class="col-sm-6"> 
                            <div class="thumbnail">
                                <img src="images\Sony DSLR.jpg">
                                <div class="caption">
                                    <h3>Sony DSLR</h3>
                                    <p>Price:Rs 40000.00</p>
                                <?php
                        if(isset($_SESSION["email"])){
                            if(check_if_added_to_cart("2")==1){
                                ?>
                                    <a class="btn btn-success btn-block disabled" href=""><span class="glyphicon glyphicon-shopping-cart"></span>Added to cart</a>
                                <?php
                            }
                            else{
                                ?>
                                    <a class="btn btn-primary btn-block" href="cart-add.php?id=2"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</a>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <a class="btn btn-primary btn-block" href="login.php"><span class="glyphicon glyphicon-shopping-cart"></span>Buy Now</a>
                            <?php
                        }
                    ?>
                                </div>
                            </div>
                        </div>
                    </tr>
                </td>
<td>
    <tr class="text-center">
    <div class="col-md-3" class="col-sm-6"> 
    <div class="thumbnail">
    <img src="images\Sony-DSLR.jpg">
    <div class="caption">
    <h3>Sony DSLR</h3>
    <p>Price:Rs 50000.00</p>
     <?php
                        if(isset($_SESSION["email"])){
                            if(check_if_added_to_cart("3")==1){
                                ?>
                                    <a class="btn btn-success btn-block disabled" href=""><span class="glyphicon glyphicon-shopping-cart"></span>Added to cart</a>
                                <?php
                            }
                            else{
                                ?>
                                    <a class="btn btn-primary btn-block" href="cart-add.php?id=3"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</a>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <a class="btn btn-primary btn-block" href="login.php"><span class="glyphicon glyphicon-shopping-cart"></span>Buy Now</a>
                            <?php
                        }
                    ?>
    </div>
    </div>
    </div>
</tr>
</td>

<td>
    <tr class="text-center">
    <div class="col-md-3" class="col-sm-6"> 
    <div class="thumbnail">
    <img src="images\Olympus DSLR.jpg">
    <div class="caption">
    <h3>Olympus DSLR</h3>
    <p>Price:Rs 80000.00</p>
     <?php
                        if(isset($_SESSION["email"])){
                            if(check_if_added_to_cart("4")==1){
                                ?>
                                    <a class="btn btn-success btn-block disabled" href=""><span class="glyphicon glyphicon-shopping-cart"></span>Added to cart</a>
                                <?php
                            }
                            else{
                                ?>
                                    <a class="btn btn-primary btn-block" href="cart-add.php?id=4"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</a>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <a class="btn btn-primary btn-block" href="login.php"><span class="glyphicon glyphicon-shopping-cart"></span>Buy Now</a>
                            <?php
                        }
                    ?>
    </div>
    </div>
    </div>
</td>
</tr>

<tr>
<td>
    <tr class="text-center">
    <div class="col-md-3" class="col-sm-6"> 
    <div class="thumbnail">
    <img src="images\TitanModel-301.jpg">
    <div class="caption">
    <h3>Titan Model #301</h3>
    <p>Price:Rs 13000.00</p>
     <?php
                        if(isset($_SESSION["email"])){
                            if(check_if_added_to_cart("5")==1){
                                ?>
                                    <a class="btn btn-success btn-block disabled" href=""><span class="glyphicon glyphicon-shopping-cart"></span>Added to cart</a>
                                <?php
                            }
                            else{
                                ?>
                                    <a class="btn btn-primary btn-block" href="cart-add.php?id=5"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</a>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <a class="btn btn-primary btn-block" href="login.php"><span class="glyphicon glyphicon-shopping-cart"></span>Buy Now</a>
                            <?php
                        }
                    ?>
    </div>
    </div>
    </div>
</td>

<td>
    <tr class="text-center">
    <div class="col-md-3" class="col-sm-6"> 
    <div class="thumbnail">
    <img src="images\TitanModel-201.jpg">
    <div class="caption">
    <h3>Titan Model #201</h3>
    <p>Price:Rs 3000.00</p>
     <?php
                        if(isset($_SESSION["email"])){
                            if(check_if_added_to_cart("6")==1){
                                ?>
                                    <a class="btn btn-success btn-block disabled" href=""><span class="glyphicon glyphicon-shopping-cart"></span>Added to cart</a>
                                <?php
                            }
                            else{
                                ?>
                                    <a class="btn btn-primary btn-block" href="cart-add.php?id=6"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</a>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <a class="btn btn-primary btn-block" href="login.php"><span class="glyphicon glyphicon-shopping-cart"></span>Buy Now</a>
                            <?php
                        }
                    ?>
    </div>
    </div>
    </div>
</td>
<td>
    <tr class="text-center">
    <div class="col-md-3" class="col-sm-6"> 
    <div class="thumbnail">
    <img src="images\HMT Milan.jpg">
    <div class="caption">
    <h3>HMT Milan</h3>
    <p>Price:Rs 8000.00</p>
     <?php
                        if(isset($_SESSION["email"])){
                            if(check_if_added_to_cart("7")==1){
                                ?>
                                    <a class="btn btn-success btn-block disabled" href=""><span class="glyphicon glyphicon-shopping-cart"></span>Added to cart</a>
                                <?php
                            }
                            else{
                                ?>
                                    <a class="btn btn-primary btn-block" href="cart-add.php?id=7"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</a>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <a class="btn btn-primary btn-block" href="login.php"><span class="glyphicon glyphicon-shopping-cart"></span>Buy Now</a>
                            <?php
                        }
                    ?>
    </div>
    </div>
    </div>
</td>

<td>
    <tr class="text-center">
    <div class="col-md-3" class="col-sm-6"> 
    <div class="thumbnail">
    <img src="images\FaberLuba-111.jpg">
    <div class="caption">
    <h3>Faber Luba #111</h3>
    <p>Price:Rs 10000.00</p>
     <?php
                        if(isset($_SESSION["email"])){
                            if(check_if_added_to_cart("8")==1){
                                ?>
                                    <a class="btn btn-success btn-block disabled" href=""><span class="glyphicon glyphicon-shopping-cart"></span>Added to cart</a>
                                <?php
                            }
                            else{
                                ?>
                                    <a class="btn btn-primary btn-block" href="cart-add.php?id=8"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</a>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <a class="btn btn-primary btn-block" href="login.php"><span class="glyphicon glyphicon-shopping-cart"></span>Buy Now</a>
                            <?php
                        }
                    ?>
    </div>
    </div>
    </div>
</td>
</tr>

<tr>
<td>
    <tr class="text-center">
    <div class="col-md-3" class="col-sm-6"> 
    <div class="thumbnail">
    <img src="images\H_W.jpg">
    <div class="caption">
    <h3>H&W</h3>
    <p>Price:Rs 800.00</p>
    <?php
                        if(isset($_SESSION["email"])){
                            if(check_if_added_to_cart("9")==1){
                                ?>
                                    <a class="btn btn-success btn-block disabled" href=""><span class="glyphicon glyphicon-shopping-cart"></span>Added to cart</a>
                                <?php
                            }
                            else{
                                ?>
                                    <a class="btn btn-primary btn-block" href="cart-add.php?id=9"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</a>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <a class="btn btn-primary btn-block" href="login.php"><span class="glyphicon glyphicon-shopping-cart"></span>Buy Now</a>
                            <?php
                        }
                    ?>
    </div>
    </div>
    </div>
</td>

<td>
    <tr class="text-center">
    <div class="col-md-3" class="col-sm-6"> 
    <div class="thumbnail">
    <img src="images\Luis Phil.jpg">
    <div class="caption">
    <h3>Luis Phil</h3>
    <p>Price:Rs 1000.00</p>
     <?php
                        if(isset($_SESSION["email"])){
                            if(check_if_added_to_cart("10")==1){
                                ?>
                                    <a class="btn btn-success btn-block disabled" href=""><span class="glyphicon glyphicon-shopping-cart"></span>Added to cart</a>
                                <?php
                            }
                            else{
                                ?>
                                    <a class="btn btn-primary btn-block" href="cart-add.php?id=10"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</a>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <a class="btn btn-primary btn-block" href="login.php"><span class="glyphicon glyphicon-shopping-cart"></span>Buy Now</a>
                            <?php
                        }
                    ?>
    </div>
    </div>
    </div>
</td>
<td>
    <tr class="text-center">
    <div class="col-md-3" class="col-sm-6"> 
    <div class="thumbnail">
    <img src="images\John Zok.jpg">
    <div class="caption">
    <h3>John Zok</h3>
    <p>Price:Rs 1500.00</p>
     <?php
                        if(isset($_SESSION["email"])){
                            if(check_if_added_to_cart("11")==1){
                                ?>
                                    <a class="btn btn-success btn-block disabled" href=""><span class="glyphicon glyphicon-shopping-cart"></span>Added to cart</a>
                                <?php
                            }
                            else{
                                ?>
                                    <a class="btn btn-primary btn-block" href="cart-add.php?id=11"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</a>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <a class="btn btn-primary btn-block" href="login.php"><span class="glyphicon glyphicon-shopping-cart"></span>Buy Now</a>
                            <?php
                        }
                    ?>
    </div>
    </div>
    </div>
</td>

<td>
    <tr class="text-center">
    <div class="col-md-3" class="col-sm-6"> 
    <div class="thumbnail">
    <img src="images\Jhalsani.jpg">
    <div class="caption">
    <h3>Jhalsani</h3>
    <p>Price:Rs 1300.00</p>
     <?php
                        if(isset($_SESSION["email"])){
                            if(check_if_added_to_cart("12")==1){
                                ?>
                                    <a class="btn btn-success btn-block disabled" href=""><span class="glyphicon glyphicon-shopping-cart"></span>Added to cart</a>
                                <?php
                            }
                            else{
                                ?>
                                    <a class="btn btn-primary btn-block" href="cart-add.php?id=12"><span class="glyphicon glyphicon-shopping-cart"></span>Add to Cart</a>
                                <?php
                            }
                        }
                        else{
                            ?>
                            <a class="btn btn-primary btn-block" href="login.php"><span class="glyphicon glyphicon-shopping-cart"></span>Buy Now</a>
                            <?php
                        }
                    ?>
    </div>
    </div>
    </div>
</td>
</tr>


</table>

</div>
</div>
</div>
</body>

    <?php
        include 'includes/footer.php';
     ?>
