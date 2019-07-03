<form action="supMul.php" method="get"><?php
$servername = "localhost";
$username = "VendeurVendu";
$password = "Simplon974!";
$dbname = "rsma";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT ID, Nom, Prenom, Age, Email FROM marsoin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th></th><th>ID</th><th>Nom</th><th>Prénom</th><th>Âge</th><th>Email</th><th>Modifier</th><th>Supprimer</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td><input type=\"checkbox\" name=\"check[]\" value=\"".$row["ID"]."\"></td><td>".$row["ID"]."</td><td>".$row["Nom"]."</td> <td> ".$row["Prenom"]."</td> <td>".$row["Age"]."</td> <td>".$row["Email"]."</td> <td><a href=\"modif1.php?ID=".$row["ID"]."\">modifier</a></td><td><a href=\"sup.php?ID=".$row["ID"]."\">supprimer</a></td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

?>
<input id="submit" name="submit" type="submit" class="btn btn-danger" value="Suprimez Sélection">
</form>
<form action="add.php" ><input id="submit" name="submit" type="submit" class="btn btn-danger" value="Ajouter"></form>