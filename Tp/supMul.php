<?php

$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "rsma";
$conn = new mysqli($servername, $username, $password, $dbname);
       
       $sql = "SELECT ID FROM marsoin  ";
       $result = $conn->query($sql);
       while($row = $result->fetch_assoc()) {
        $id=$row['ID'];
       }
if (isset($_GET['check']))
{$resulta = $_GET['check'];
foreach($resulta as $id)
          {
             // echo $id;
            $sqli = "DELETE FROM marsoin WHERE ID=$id";
            $res=$conn->query($sqli);
            header('Location: afficheUtil.php'); 
          }

}
?>