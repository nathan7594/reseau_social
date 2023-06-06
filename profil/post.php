<?php

include "../../connectDb.php";
include "../../session.php";
$content = $_POST["message"];
// $sql = "SELECT * FROM users INNER JOIN post ON users.id = post.users_id";
$req = $conn->prepare('INSERT INTO post(users_id,content)VALUES(:users_id, :content)');
$req->execute(array('users_id' => $_SESSION['id'],'content' => $content));
header("Location: /profil/profil.php");
// $sql = "SELECT * FROM users INNER JOIN post ON users.id = post.users_id";
// $verif_user = $conn->prepare("SELECT id FROM users WHERE id = ?",
// array($_SESSION['id']));
// $verif_user = $verif_user->fetch();
// echo $verif_user;
?>
