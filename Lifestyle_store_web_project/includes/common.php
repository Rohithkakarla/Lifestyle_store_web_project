
<?php
    session_start();
    function connection_database()
    {
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="store";
       try{
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
         catch(PDOException $e)
          {
            echo 'connection failed'.$e->getMessage();    
          }
       return $pdo;
    }
?>