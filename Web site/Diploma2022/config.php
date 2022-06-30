<?php

    class Config
    {
        public static function connect()
        {
            $host="localhost";
            $username="root";
            $password="";
            $dbname="mydb";

            try
            {
                $con= new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
                $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            }
            catch(PDOException $e)
            {
                echo "Connection failed" . $e->getMessage();
            }
            
            return $con;
        }
    }
?>