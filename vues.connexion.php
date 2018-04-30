<!DOCTYPE php>
<html lang="fr">
   <head>
      <title>Connexion aux services</title>
   </head>
   <body>
      <h2>Connexion au site</h2>
      <form action="connexion.php" method="post">
         <table>
            <tr>
               <td><label for="login"><strong>Nom de compte</strong></label></td>
               <td><input type="text" name="login" id="login"/></td>
            </tr>
            <tr>
               <td><label for="pass"><strong>Mot de passe</strong></label></td>
               <td><input type="password" name="pass" id="pass"/></td>
            </tr>
         </table>
         <input type="submit" name="connexion" value="Se connecter"/>
      </form>
   </body>
</html>