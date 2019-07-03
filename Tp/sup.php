<?php
  $servername = "localhost";
  $username = "VendeurVendu";
  $password = "Simplon974!";
  $dbname = "rsma";
   $ID=$_GET['ID'];
   echo($ID);
   try {
       
       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       // set the PDO error mode to exception
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sqli = "SELECT ID  FROM marsoin";
       // sql to delete a record
       $sql = "DELETE FROM marsoin WHERE ID=$ID";
   
       // use exec() because no results are returned
       $conn->exec($sql);
       echo "Record deleted successfully";
       }
   catch(PDOException $e)
       {
       echo $sql . "<br>" . $e->getMessage();
       }
   
   $conn = null;
?>