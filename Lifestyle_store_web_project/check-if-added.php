<?php
    include 'includes/common.php';
    function check_if_added_to_cart($item_id){
        $uid=$_SESSION["id"];
        $pdo = connection_database();
        $sql="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$uid' AND status='Added to cart'";
        $count = 0;
        $result=$pdo->query($sql);
        $count = $result->rowCount();
        
        if($count>=1){
            return 1;
            $count = 0;
        }
        else{
            return 0;
            $count =0;
        }
    }
?>
