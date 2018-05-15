<!DOCTYPE>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Lares</title>
		<link rel="stylesheet" href="vues.ajout.css"/>
	</head>

	<body>
	<?php include('vues.header.php');?>
	
		<div id="conteneur">
			<div class="element">
				<form action="vues.ajoutpieces.php">
					<button class="bouton" ><label class="textinput">Définir une nouvelle pièce</label></button>
				</form>
			</div>
			</br>
			<div class="element">
				<form action="vues.ajoutcapteurs.php">
					<button class="bouton" href="vues.connexion.php"><label class="textinput">Ajouter des capteurs à une pièce existante</label></button>
				</form>
			</div>
		</div>
		
	</body>

</html>