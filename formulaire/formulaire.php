<html>
  <head>
    <title>Formulaire en PHP/MySQL</title>
  </head>
  <body>
    <form method="POST" action="formulaire/traitement.php">
      Nom : <input type="text" name="nom" placeholder="Entrez votre nom" /><br />
      Prénom : <input type="text" name="prenom" placeholder="Entrer votre Prenom" /><br />
      Email : <input type="email" name="email" placeholder="Entrer votre Email" /><br />
      Mot de Passe : <input type="password" name="mdp" placeholder="Entrer votre mot de passe" /><br />
      <input type="submit" value="Inscription" />
    </form>
  </body>
</html>