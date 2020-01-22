<?php
include 'includes/common.php';
$pdo = connection_database();
try
{
    if(isset($_POST["submit"]))
    {
        if(empty($_POST["email"]) || empty($_POST["password"]) || empty($_POST["name"]) || empty($_POST["contact"]))
        {
            echo '<label>All fields are required</label>';
        }
        else
        {
            
            $query = "SELECT * FROM users WHERE email = :email AND password = :password";
            $statement = $pdo->prepare($query);
            $statement->execute(array('email'=>$_POST["email"],'password'=>$_POST["password"]));
            $count = $statement->rowCount();
            if($count > 0)
            {
                $_SESSION["email"] = $_POST["email"];
               $querie = "SELECT id FROM users WHERE email = :email";
                $stmt = $pdo->prepare($querie);
                $stmt->execute(array('email'=>$_POST["email"]));
                
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                while($row = $stmt->fetch())
                {
                  $_SESSION["id"] = $row['id'];
                }
                echo '<label>Already Have any Account</label>';
                header("location:products.php");
            }
            else
            {
                $query = "INSERT INTO users (name, email, password, contact ,city , address) VALUES (?,?,?,?,?,?)";
                $statement = $pdo->prepare($query);
                $statement->execute([$_POST["name"],$_POST["email"],$_POST["password"],$_POST["contact"],$_POST["city"],$_POST["address"]]);
                $_SESSION["email"] = $_POST["email"];
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
        }
    }
}
catch(PDOException $error)
{
    echo $error->getMessage();
}

    
?>
