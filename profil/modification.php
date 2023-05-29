<?php 
session_start();
$nom = $_SESSION["nom"];
$prenom = $_SESSION["prenom"];
$email = $_SESSION["email"];
$mdp = $_SESSION["mdp"];
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
<form method="POST" action="update.php">
      Nom :<input type="text" name="nom" placeholder="Entrez votre nom" value="<?php echo $nom; ?>"/><br />
      Prénom : <input type="text" name="prenom" placeholder="Changer votre Prenom" value="<?php echo $prenom; ?>"/><br />
      Email : <input type="email" name="email" placeholder="Changer votre Email" value="<?php echo $email; ?>"/><br />
      Mot de Passe : <input type="password" name="mdp" placeholder="Changer votre mot de passe" value="<?php echo $mdp; ?>"/><br />
      <input type="submit" value="Modification" />


    
</body>
</html>
    <!-- <form method="POST" action="update.php"></form>
    Nom : <input type="text" name="nom" placeholder="Changer votre nom" /><br />
      Prénom : <input type="text" name="prenom" placeholder="Changer votre Prenom" /><br />
      Email : <input type="email" name="email" placeholder="Changer votre Email" /><br />
      Mot de Passe : <input type="password" name="mdp" placeholder="Changer votre mot de passe" /><br />
      <input type="submit" value="oui" /> -->
