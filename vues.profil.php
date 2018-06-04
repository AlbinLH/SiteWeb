<?php 
session_start();
//recuperer nom, prenom, adresse mail, tableau pieces avec capteurs dans chaque pièce
?>
<!DOCTYPE php>
<html lang="fr">
	<head>
		<link rel="stylesheet" href="vues.connexion.css">
		<title>Connexion aux services</title>
	</head>
	<body>
	<form method='POST' action="vues.modif.php">
		
			<h1 class="text">Votre profil :</h1>
			
					<p class="texte">Nom et prénom :</p>
				
				<?php 
			     if ($_SESSION['genre'] == 'Homme') {
			         echo "Monsieur "; echo $_SESSION['prenom']; echo " ";  echo $_SESSION['nom'];
			     } else {
			         echo "Madame "; echo $_SESSION['prenom']; echo " ";  echo $_SESSION['nom']; 
			     }
			     ?>
			   
					<button type="submit" name="edit" value="changer_nom"/>Editer</button>
				
					<p class="texte">Adresse de votre logement :</p>
						
					<p><?php echo $_SESSION['adresse']; ?></p>
				
					<button type="submit" name="edit" value="changer_adresse"/>Editer</button>
			
					<p class="texte">Adresse mail :</p>
					
					<p class="texte"><?php echo $_SESSION['adresse_mail']; ?></p>
				
					<button type="submit" name="edit" value="changer_adresse_mail"/>Editer</button>
		
					<p class="texte">Mot de passe :</p>
					
					<p>********</p>
				
					<button type="submit" name="edit" value="changer_mot_de_passe"/>Editer</button>
		
	</form>
	</body>
</html>
