<?php
session_start();
include_once("config.php");

    //logic center
    if(isset($_POST['register']))
    {
        $con=config::connect();
        $username =$_POST['username'];
        $password =$_POST['password'];
        $repassword = $_POST['repassword'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $clipPass=sha1($password);
        $clipRePass=sha1($repassword);
       
        if(insertDetails($con,$username,$clipPass,$clipRePass,$name,$email))
        {
           $_SESSION['username']=$username;
            header("Location:profile.php"); 
        }
       
       
    }

    if(isset($_POST['login']))
    {
        $con=config::connect();
        $username =$_POST['username'] ;
        $password =$_POST['password'];
        $clipPass=sha1($password);
        
       
        if(checkLogin($con,$username,$clipPass))
        {
           $_SESSION['username']=$username;   
            header("Location:profile.php"); 
        
        }
        else
        {
            echo "Incorrect inserted data!";
        }
    }

    function insertDetails($con,$username,$password,$repassword,$name,$email)
    {
        $query=$con->prepare("
            INSERT INTO users (username,password,repassword,name,email)
            VALUES (:username,:password,:repassword,:name,:email)
        ");

        $query->bindParam(":username",$username);
        $query->bindParam(":password",$password);
        $query->bindParam(":repassword",$repassword);
        $query->bindParam(":name",$name);
        $query->bindParam(":email",$email);


        if($password!=$repassword)
        {
            echo("Passwords not match,make sure you type same passwords correctlly!");
        }
        
        else
        {
            return $query->execute();
        }
    }

   

    function checkLogin($con,$username,$password)
    {
     
        $query=$con->prepare("
            SELECT * FROM users  
            WHERE username=:username AND password=:password ");
       

        $query->bindParam(":username",$username);
        $query->bindParam(":password",$password);

        $query->execute();

        if($query->rowCount() == 1)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
   
   
    
    
?>