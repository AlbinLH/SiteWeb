<?php session_start() ?>
<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8" />
<title>Ajouter une nouvelle pièce</title>
<link rel="stylesheet" href="vues.ajoutpieces.css" />

</head>

<body>
<script type='text/javascript'>
function confirmation() {
	var r = confirm("Etes-vous sûr de vouloir supprimer cette piece ? Tous les capteurs de la piece seront aussi supprimés.");
	return r;
}
</script>
	<?php include('vues.header.php');?>
	<form method="post" action="modele.ajoutpieces.php">

	
		<div id="conteneur">

			<div class="taille_du_texte">Ajoutez une pièce :</div>
			<input type="text" name="nom_de_piece" id="nom_de_piece" placeholder="Saisir le nom de la pièce" />
		
		</div>
		<div id="conteneur8">
		     <input type="submit" value="Valider" />
		</div>	
	</form>
	<?php 
			try
            {
            $bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', 'root');
            }
            catch(Exception $e)
            {
            // En cas d'erreur, on affiche un message et on arr�te tout
             die('Erreur : '.$e->getMessage());
            }
			
		    $reponse = $bdd->prepare("SELECT Nom FROM piece WHERE Id_logement = ? "); //Prends les noms des pièces associée à l'utilisateur.
		    $reponse->execute(array( $_SESSION['idlogement']));
		    ?>
	<form name="form1" method="get" action="modele.supprimpieces.php" onsubmit="return confirmation()">
		<div id="conteneur">
			<div class="taille_du_texte">Supprimez une pièce :</div>
			<select name="nom_de_piece">
			<?php 
            while ($donnees = $reponse->fetch()) {
                $piece = $donnees['Nom'];
                echo "<option value='$piece'>$piece</option>"; //affichage des différentes pièces.
            }
            $reponse->closeCursor();
		    ?>
			</select>
		</div>
		<div id="conteneur8">
		     <input name="supprimer" type="submit" value="Supprimer" /> 
		</div>	
	</form>
</body>

</html>