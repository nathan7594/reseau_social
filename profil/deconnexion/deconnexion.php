<?php 
include "../../session.php";
$_SESSION = array();
session_destroy();
header('Location: ../../connexion/connexion.php');
exit;
?>