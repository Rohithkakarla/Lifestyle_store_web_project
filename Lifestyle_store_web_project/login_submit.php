<?php
include 'includes/common.php';
//session_start();
try
{
    if(isset($_POST["submit"]))
    {
        if(empty($_POST["email"]) || empty($_POST["password"]))
        {
            echo '<label>All fields are required</label>';
        }
        else
        {     
            $pdo = connection_database();
            $query = "SELECT * FROM users WHERE email = :email AND password = :password";
            $statement = $pdo->prepare($query);
            $statement->execute(array('email'=>$_POST["email"],'password'=>$_POST["password"]));
            $count = $statement->rowCount();
           
            if($count > 0)
            {
                $_SESSION["email"]=$_POST["email"];
                
                $querie = "SELECT id FROM users WHERE email = :email";
                $stmt = $pdo->prepare($querie);
                $stmt->execute(array('email'=>$_POST["email"]));
                
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                while($row = $stmt->fetch())
                {
                  $_SESSION["id"] = $row['id'];
                }
                header("location:products.php");
            }
            else
            {
                echo '<label>Wrong Data</label>';
            }
        }
    }
}
catch(PDOException $error)
{
   echo $error->getMessage();
}
?>
