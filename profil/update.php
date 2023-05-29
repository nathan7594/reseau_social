<?php
function update(){
include "../connectDb.php";
include "../config.php";
session_start();
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
<!-- // echo "".$_SESSION["nom"].""."<br>";
// echo "".$_SESSION["prenom"].""."<br>";
// echo "".$_SESSION["email"].""."<br>";
// echo "".$_SESSION["mdp"].""."<br>"; -->