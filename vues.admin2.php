<?php 
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>maPage</title>
        <link rel="stylesheet" href="vues.admin2.css" />
    </head>

 	<body>
 	     <?php 
 	     $liste=explode(',', $_POST['users']);
 	     for($i=0; $i<count($liste); $i++){
 	         echo "<h1> Gestion du compte de  $liste[$i]</h1>";
 	     }
 	         ?>          
 		 <table>
            <tr>
                <td>Gestion des capteurs</td>
                <td><a href="vues.ajoutcapteurs.php"><input type="button" value="Ajouter" class="boutons2"></a></td>
                <td><a href="vues.ajoutcapteurs.php"><input type="button" value="Supprimer" class="boutons2"></a></td>
            </tr>
            <tr>
                <td>Gestion des actionneurs</td>              
                <td><input type="button" value="Ajouter" class="boutons2"></td>
                <td><input type="button" value="Supprimer" class="boutons2"></td>
            </tr>
            <tr>
                <td>Messagerie</td>
                <td><a href="vues.ajoutcapteurs.php"><input type="button" value="Accès messagerie" class="boutons2"></a></td>
            </tr>
            <tr>
                <td>Action d'urgence</td>
                <td><a href="vues.donnees_capteurs.php"><input type="button" value="Obtenir donnée capteur" class="boutons2"></a></td>
                <td><input type="button" value="Déclencher actionneur" class="boutons2"></td>
            </tr>
             <tr>
                <td>Bannir utilisateur</td>
                <td><input type="button" value="Oui" class="boutons2"></td>
                <td><input type="button" value="Non" class="boutons2"></td>
            </tr>
        </table>

 	</body>
</html>
