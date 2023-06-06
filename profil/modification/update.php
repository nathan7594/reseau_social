<?php
function update(){
include "../../connectDb.php";
include "../../config.php";
include "../../session.php";
$updatenom = $_POST["nom"];
$updateprenom = $_POST["prenom"];
$updateemail = $_POST["email"];
$updatemdp = $_POST["mdp"];

$sql = $conn->prepare("UPDATE `users` SET nom= '$updatenom' ,prenom ='$updateprenom', email='$updateemail', mdp ='$updatemdp' WHERE id='".$_SESSION["id"]."'");
$sql->execute();

echo "Bravo '".$_SESSION["nom"]."'"." "."tu viens de modifier ton nom en '".$updatenom."'"." "."<br>";
echo "Bravo '".$_SESSION["prenom"]."'"." "."tu viens de modifier ton prenom en '".$updateprenom."'"." "."<br>";
echo "Bravo '".$_SESSION["email"]."'"." "."tu viens de modifier ton email en '".$updateemail."'"." "."<br>";
echo "Bravo '".$_SESSION["mdp"]."'"." "."tu viens de modifier ton mdp en '".$updatemdp."'"." "."<br>";

}
update();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="../profil.php">Retour à mon profil<a/>
</body>
</html>