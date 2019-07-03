<?php

$nom = $_GET['nom'];
$pnom = $_GET['prenom'];
$age = $_GET['age'];
$mail = $_GET['mail'];
$conn = new PDO("mysql:host=localhost;dbname=rsma", 'VendeurVendu', 'Simplon974!');

$req = " INSERT INTO marsoin (ID, Nom, Prenom, Age, Email) VALUES (null,'$nom','$pnom','$age','$mail');";
echo $req; // tester la requete sur phpmyadmin

$conn->exec($req);
echo "utilisateur ajouté"; // vérifier avec phpmyadmin
header('Location: afficheUtil.php');
?>
