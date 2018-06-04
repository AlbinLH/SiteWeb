<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>maPage</title>
        <link rel="stylesheet" href="vues.admin_1.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>

 	<body>
        <div id="global">
     	<h1 class="titre_pers">ESPACE PERSONNEL</h1>
        <div class="conteneur">
            <div class="box">
                <!-- 2x Lien : changer de mot de passe-->
                <a class="icon" href="#"><img src="key.svg" alt="key"></a>   
                <a class="txt" href="#">Changer de mot de passe</a>         
            </div>
            <div class="box">
                <!-- 2x Lien : Changer adresse mail-->
                <a class="icon" href="#"><img src="at.svg" alt="at"></a>
                <a class="txt" href="#">Changer adresse mail</a>
            </div>
            <div class="box">
                <!-- 2x Lien : Liste utilisateurs bannis-->
                <a class="icon" href="#"><img src="clipboard-list.svg" alt="clipboard"></a>
                <a class="txt" href="#">Liste utilisateurs bannis</a>
            </div>
            
        </div>
        <h1 class="titre_user">ESPACE UTILISATEUR</h1><br /><br />
        <div class="conteneur_2">
        <form method="post" action="vues.admin2.php"> <!-- Attention à traitement -->
            <label for="pays"><strong>Veuillez choisir parmi la liste des utilisateurs gérés suivants : </strong></label>
                <select name="users" id="users">
                      <!--  <option value="france">France</option>
                       <option value="espagne">Espagne</option>
                       <option value="italie">Italie</option>
                       <option value="royaume-uni">Royaume-Uni</option>
                       <option value="canada">Canada</option>
                       <option value="etats-unis">États-Unis</option>
                       <option value="chine">Chine</option>
                       <option value="japon">Japon</option>-->
                       <?php 
$bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', 'root');
$reponse = $bdd->query('SELECT Nom, Prenom FROM personne');
while ($donnees1 = $reponse->fetch()) {?>

  <option value="<?php echo $donnees1["Nom"] ?>"><?php echo $donnees1['Nom'] . " " .$donnees1['Prenom']?>
  </option>
        <?php } ?>
        <input type="submit"/>	
                </select>
        </form>
        
        <br /><br />
        <div class="search">
        <p><strong>Recherche spécifique : </strong></p>
        <table>
            <tr>
                <td><strong>Identifiant</strong></td>
                <td><strong> : </strong></td>
                <td> <input type="search" class="recherche"> </td>
                <td><input type="button" value="Rechercher" class="boutons2"></td>
            </tr>
            <tr>
                <td><strong>Adresse</strong></td>
                <td><strong> : </strong></td>
                <td><input type="search" class="recherche"> </td>
                <td><input type="button" value="Rechercher" class="boutons2"></td>
            </tr>
            <tr>
                <td><strong>Nom</strong></td>
                <td><strong> : </strong></td>
                <td><input type="search" class="recherche"></td>
                <td><input type="button" value="Rechercher" class="boutons2"></td>
            </tr>
            <tr>
                <td><strong>Prénom</strong></td>
                <td> : </td>
                <td><input type="search" class="recherche"></td>
                <td><input type="button" value="Rechercher" class="boutons2"></td>
            </tr>
        </table>
        </div>
            
        </div>    
            
        </div>
 	</body>
</html>
