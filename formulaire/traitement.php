<?php
include "../connectDb.php";
include "../config.php";

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$mdp = md5($_POST["mdp"]);
$sth = $conn->prepare("INSERT INTO users(nom,prenom,email,mdp)
VALUES(:nom, :prenom, :email, :mdp)");
$sth->bindParam(':nom',$nom);
$sth->bindParam(':prenom',$prenom);
$sth->bindParam(':email',$email);
$sth->bindParam(':mdp',$mdp);
$sth->execute();
header("Location:../connexion/connexion.php");

?>