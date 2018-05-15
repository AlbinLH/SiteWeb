<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Admin</title>
        <link rel="stylesheet" href="vues.admin.css" />
    </head>

 	<body>
     	<h1 class="titre_pers">Espace personnel </h1>
        <div class="conteneur">
        <div><input type="button" value="Changer de mot de passe" class="boutons"></div>
       <div> <input type="button" value="Changer adresse mail" class="boutons"></div>
       <div> <input type="button" value="Liste utilisateurs bannis" class="boutons"></div>
        </div>
        <h1 class="titre_user">Espace utilisateur </h1>
        <p>
        <form method="post" action="traitement.php"> <!-- Attention à traitement -->
            <label for="pays">Veuillez choisir parmi la liste des utilisateurs gérés suivants : </label>
                <select name="pays" id="pays">
                       <option value="albin le hingrat">Albin Le Hingrat</option>
                       <option value="yann-ly herve">Yann-ly Herve</option>
                       <option value="kevin inore">Kevin Inore</option>
                </select>
        </p>
        </form>
		<form action="vues.admin2.php">
        Recherche spécifique : <br>
        <table>
            <tr>
                <td>Identifiant</td>
                <td> : </td>
                <td> <input type="search" class="recherche"> </td>
                <td><button value="Rechercher" class="boutons2"><label>Rechercher</label></button></td>
            </tr>
            <tr>
                <td>Adresse</td>
                <td> : </td>
                <td><input type="search" class="recherche"> </td>
                <td><button value="Rechercher" class="boutons2"><label>Rechercher</label></button></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td> : </td>
                <td><input type="search" class="recherche"></td>
                <td><button value="Rechercher" class="boutons2"><label>Rechercher</label></button></td>
            </tr>
            <tr>
                <td>Prénom</td>
                <td> : </td>
                <td><input type="search" class="recherche"></td>
                <td><button value="Rechercher" class="boutons2"><label>Rechercher</label></button></td>
            </tr>
        </table>
        </form>
 	</body>
</html>