<?php
    session_start();
    
    if (isset($_SESSION["email"])){
        header('location: products.php');
    }
?>

<!DOCTYPE html>
<head>
<title>LifeStyle Store</title>
<link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <?php
       include 'includes/header.php';
     ?>
     
     

<div class="content">
    <div id="background">    	
            <div class="container" style="margin:auto" align="center">
                <div id="bg-content">
                    <h1>We Sell Lifestyle.</h1>
                    <p>Flat 40% OFF on premium brands</p><br>
                    <a href="products.php" class="btn btn-danger">Shop Now</a>
                </div>
            </div>
        </div>

    <div class="container">
    	<div class="items">
        <a href="#">
            <img src="images\camera.jpg" alt="Camera" class="thumbnail">
            <div class="caption">
               <h2>Cameras</h2>
               <p>Choose among the best available in the world</p>
            </div>
        </a>
        </div>

        <div class="items">
        	<a href="#">
                <img src="images\watch.jpg" alt="Watches" class="thumbnail">
                <div class="caption">
                    <h2>Watches</h2>
                    <p>Original watches from the best brand</p> 
                </div>
            </a>
        </div>

        <div class="items">
            <a href="#">
                <img src="images\shirt.jpg" alt="Shirts" class="thumbnail"></img>
                <div class="caption">
                    <h2>Shirts</h2>
                    <p>Our exquisite collection of shirts</p>
                </div>
            </a>
        </div>
    </div>
</div>
    <?php
        include 'includes/footer.php';
     ?>

</body>
</html>