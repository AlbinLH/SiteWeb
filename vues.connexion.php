<!DOCTYPE php>
<html lang="fr">
   <head>
   		<link rel="stylesheet" href="vues.connexion.css">
      <title>Connexion aux services</title>
   </head>
   <body>
   	    <div class="blocktext" id="App-logo"><img id="image" src ="LOGO_1.png" alt="logoLARES" /></div>
        <h2 class="blocktext">Connexion aux services LARES</h2>
        <form action="modele.connexion.php" method="post">
         <p class="blocktext"><input type="text" placeholder="E-mail" name="login" id="login"/></p>
         <p class="blocktext"><input type="password" placeholder="Mot de passe" name="pass" id="pass"/></p>
         <p class="blocktext"><button type="submit" name="connexion" value="Se connecter" id="val">Valider</button></p>
      </form>

      <form action="vues.inscription1.php">
      	<br /><p class="blocktext" id="inscription"><button type="submit" name="submit">Pas encore inscrit ? S'inscrire ici</button></p>
      </form>

   </body>
</html>
