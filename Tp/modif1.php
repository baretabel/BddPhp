<?php
$ID=$_GET['ID'];

$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "rsma";

// Create connection

$conn = new mysqli($servername, $username, $password, $dbname);
       
       $sql = "SELECT ID, Nom, Prenom, Age, Email FROM marsoin WHERE ID=$ID";
       $result = $conn->query($sql);
       while($row = $result->fetch_assoc()) {
           $nom=$row['Nom'];
           $pnom=$row['Prenom'];
           $age=$row['Age'];
           $mail=$row['Email'];
           $id=$row['ID'];
          
           
}

?>
 <body>
    <div>
        
        <form method="get" action="modif.php?ID=<?php echo($id)?>">
        <objet style="visibility: collapse">
        Id: 
            <input type="text" name="id" value="<?php echo($id)?>"><br>
        </objet>
            Nom : 
            <input type="text" name="nom" value="<?php echo($nom)?>"><br>
            Prenom : 
            <input type="text" name="prenom" value="<?php echo($pnom)?>"><br>
            Age : 
            <input type="number" name="age" value="<?php echo($age)?>"><br>
            Email : 
            <input type="email" name="mail" value="<?php echo($mail)?>"><br>
            <input type="submit" name="submit" value="modifier">
        </form>
    </div>
</body>
<?php
function chang(){
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqli = "UPDATE marsoin SET Nom='$nom', Prenom='$pnom', Age='$age', Email='$mail' WHERE ID=$ID";

    // Prepare statement
    $stmt = $conn->prepare($sqli);

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sqli . "<br>" . $e->getMessage();
    }

$conn = null;
}
?>