
<?php
    //session_start();
    if(isset($_POST["submit"])){
        
        $data_missing=array();

        if(empty($_POST['password'])){
            $data_missing[] = 'Old Password';
        }
     
        if(empty($_POST['password_new'])){
            $data_missing[] = 'New Password';
        }
    
        if(empty($_POST['password_confirm'])){
            $data_missing[] = 'Confirmation Password';
        }
        if(empty($data_missing)){
            include 'includes/common.php';
            if(isset($_SESSION["email"])){
                $temp1=$_POST["password_new"];
                $temp2=$_POST["password_confirm"];
                $old_pass=$_POST["password"];
                if(strcmp($temp2,$temp1)!=0){
                    echo "Passwords do not match";
                }
                else{
                    
                    $pdo =connection_database(); 
                    $uid=$_SESSION["id"];
                    $sql="SELECT password FROM users WHERE id='$uid'";
                    $result=$pdo->query($sql);
                    $result->setFetchMode(PDO::FETCH_ASSOC);
                    while($row = $result->fetch())
                    {
                       $pass = $row['password'];
                    }
                      
                    if(strcmp($pass,$old_pass)!=0){
                        echo "Ïncorrect password";
                    }
                    else{
                        $sql = "UPDATE users SET password=? WHERE id=?";
                        $pdo->prepare($sql)->execute([$temp1, $uid]);
                        echo "Password changed";
                        header("location:products.php");
                    }
                }
            }
        }
        else{
            $count=1;
            echo "Details not entered correctly";
        }
    }
    else{
        header("location: index.php");
    }
    
?>