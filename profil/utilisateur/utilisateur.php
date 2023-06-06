<?php
include "../../connectDb.php";
include "../../session.php";
// print_r($_GET['id'])."'"." "."<br>";
$profilviste = $_GET['id'];
$sql="SELECT * FROM users where id='".$profilviste."'";
// $sql ="SELECT * FROM `users` WHERE email='".$inputemail."'";
$sql=$conn->query($sql);
foreach($sql as $row){
    echo "Tu visites le profil de"." ".$row["nom"]."<br>";
    echo "Son prénom est"." ".$row["prenom"]."<br>";
    echo "Pour le contacter"." ".$row["email"]."<br>";
}

?>