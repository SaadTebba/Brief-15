<?php
  
try {
    $servername = "localhost";
    $dbname = "testingnissrine";
    $username = "root";
    $password = "";
 
    $conn = new PDO("mysql:host=$servername; dbname=testingnissrine", $username, $password);
     
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
} catch(PDOException $e) {
    echo "Connection failed: "
        . $e->getMessage();
}