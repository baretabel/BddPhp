<?php
$nom = $_GET['nom'];
$pnom = $_GET['prenom'];
$age = $_GET['age'];
$mail = $_GET['mail'];
   $servername = "localhost";
   $username = "VendeurVendu";
   $password = "Simplon974!";
   $dbname = "rsma";
    $ID=$_GET['id'];
    echo($ID);
   try {
       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       // set the PDO error mode to exception
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
       $sql = "UPDATE marsoin SET Nom='$nom', Prenom='$pnom', Age='$age', Email='$mail' WHERE ID=$ID";
   
       // Prepare statement
       $stmt = $conn->prepare($sql);
   
       // execute the query
       $stmt->execute();
   
       // echo a message to say the UPDATE succeeded
       echo $stmt->rowCount() . " records UPDATED successfully";
       header('Location: afficheUtil.php'); 
       }
   catch(PDOException $e)
       {
       echo $sql . "<br>" . $e->getMessage();
       }
   
   $conn = null;
?>