<?php
    include 'includes/common.php';
    $pdo = connection_database();
    if(isset($_SESSION["email"])){
        
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
        
        <title>Lifestyle Store - My Cart</title>
    </head>

    <body>
        
    <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                
                <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span>Settings</a></li>
                <li><a href="includes/logout_script.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
            </ul>
        </div>
    </div>
    </div>
        <br>
        <br>
        <br>
        <br>
        
        <div class="container">
            <h2><b>My Cart</b></h2> 
            <p>Following items were added in your cart : </p> 
            <div class="row decor_bg col-md-10 col-md-offset-1" style="text-align:center">
                <table class="table table-striped table-bordered"> 
                    <thead> 
                        <tr> 
                            <th style="text-align:center;font-size:17px">Sr. No.</th> 
                            <th style="text-align:center;font-size:17px">Item Name</th> 
                            <th style="text-align:center;font-size:17px">Price</th>
                            <th style="text-align:center;font-size:17px">Quantity</th>
                            <th style="text-align:center;font-size:17px">Total</th>
                            <th style="text-align:center;font-size:17px">Remove Item</th>
                        </tr> 
                    </thead> 
                    <tbody> 
                        <?php
                            $uid=$_SESSION["id"];
                            $view="SELECT items.name, items.price, items.id FROM items, users_items WHERE users_items.user_id='$uid' AND users_items.item_id=items.id AND users_items.status='Added to cart'";
                            $result=$pdo->query($view);
                            $total=0;
                            $srno=1;
                            $count = $result->rowCount();
                            $result->setFetchMode(PDO::FETCH_ASSOC);
                            if($count>0){
                                while($row = $result->fetch()){                   
                        ?>
                        <tr>
                            <td>
                                <?php
                                    echo $srno;
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row["name"];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo $row["price"];
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo "1";
                                ?>
                            </td>
                            <td>
                                <?php
                                    echo "&#8377; ".$row["price"];
                                    $srno++;
                                    $total=$total+$row["price"];
                                ?>
                            </td>
                            <td>
                                <a href="cart-remove.php?id=<?php echo $row["id"]?>" style="font-size:14px"><span class="glyphicon glyphicon-trash"></span>Remove</a>
                            </td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="font-weight:bold;font-size:20px;color:black">Grand Total :</td>
                            <td style="font-weight:bold;font-size:20px;color:black">
                                <?php
                                    echo "&#8377; ".$total;
                                ?>
                            </td>
                        </tr>
                    </tbody> 
                </table>
                
                <?php
                    if($total==0){
                        ?>
                            <a id="link" class="btn btn-warning btn-sm" style="text-decoration: none;color: #ededed"><span class="glyphicon glyphicon-check"></span>Confirm Order</a>
                        <?php
                    }
                    else{
                        ?>
                            <a id="link" class="btn btn-success btn-sm active" style="text-decoration: none;color: #ededed" href="success.php"><span class="glyphicon glyphicon-check"></span>Confirm Order</a>
                        <?php
                    }
                ?>                
            </div> 
        </div> 
        <br>
        <br>
                        
        <?php 
           include 'includes/footer.php';
        ?>

    </body>
</html>