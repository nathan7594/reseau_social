<?php
session_start();
echo "Bienvenue ".$_SESSION["nom"]."";
//session_destroy();
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
<a href="modification.php">Modification information personnelle<a/>
    
</body>
</html>
