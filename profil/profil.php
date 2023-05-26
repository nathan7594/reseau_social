<?php
session_start();
echo "Bienvenue ".$_SESSION["nom"]."";
session_destroy();
?>