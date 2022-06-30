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
        $clipPass=$password;
        $clipRePass=$repassword;
       
        if(insertDetails($con,$username,$clipPass,$clipRePass,$name,$email))
        {
           $_SESSION['username']=$username;
            header("Location:profile.php"); // web page profile
        }
       
       
    }

    if(isset($_POST['login']))
    {
        $con=config::connect();
        $username = $_POST['user'];
        $password = $_POST['pass'];
        
     
       
        if(checkLogin($con,$username,$password))
        {
           $_SESSION['username']=$username;
           
            header("Location:profile.php"); 

        }
        else
        {
            echo "Incorrect inserted data!"; //print added comment
        }
    }
            
    
        
        
    
    $user=$_SESSION['username'];
    if(isset($_POST['comment']))
    {
        $con=config::connect();
        $content=$_POST['content'];       
        $user=$_SESSION['username'];
      
        if(insertComment($con,$content,$user))
        {
           echo "Added successfully"; 
            
        }

    }
    function insertComment($con,$content,$user)
    { 

        $query=$con->prepare("
            INSERT INTO comments (content,user)
            VALUES (:content,:user)
            
        ");

        $query->bindParam(":content",$content);
        $query->bindParam(":user",$user);


        return $query->execute();
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

    

?>