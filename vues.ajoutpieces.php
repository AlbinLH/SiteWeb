<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8" />
<title>Ajouter une nouvelle pièce</title>
<link rel="stylesheet" href="vues.ajoutpieces.css" />

</head>

<body>
	<?php include('vues.header.php');?>
	
	<form method="post" action="modele.ajoutpieces.php">

	
		<div id="conteneur">

			<div class="taille_du_texte">Ajoutez une pièce:</div>
			<input type="text" name="nom_de_piece" id="nom_de_piece" placeholder="Saisir le nom de la pièce" />
		
		</div>
		<fieldset>
       <legend>Choisissez les capteurs disponibles dans cette pièce:</legend>

		<div id="conteneur_principal">
			
			<div id="conteneur2">
		
				<img class ="photo" src="images site APP/capteur_de_presence.png"alt="icone capteur de présence" title="capteur de présence" />
				<span class="position_du_texte">Capteur de présence<input type="checkbox" name="capteur_de_presence" /></span>
			
			</div>	
			<div id="conteneur3">		
				<img class ="photo" src="images site APP/thermometre.png" alt="icone themomètre"title="thermomètre" />
				<span class="position_du_texte">thermomètre<input type="checkbox" name="thermometre"/></span>
			</div>
			<div id="conteneur4">
				<img class ="photo"  src="images site APP/capteur_de_luminosite.png"alt="icone capteur de luminosité" title="capteur de luminosité" />
				<span class="position_du_texte">Capteur de luminosité<input type="checkbox" name="capteur_de_luminosite"/></span>
			</div>
			<div id="conteneur5">
				<img class ="photo" src="images site APP/capteur_d_humidite.png" alt="icone capteur d'humidité" title="capteur d'humidité" />
				<span class="position_du_texte">Capteur d'humidité<input type="checkbox" name="capteur_d_humidite"/></span>
			</div>
			<div id="conteneur6">
				<img class ="photo" src="images site APP/etat_des_volets.png" alt="icone etat des volets" title="état des volets" />
				<span class="position_du_texte">Etats des volets<input type="checkbox" name="etat_des_volets"/></span>
			</div>
			<div id="conteneur7">
				<img class ="photo" src="images site APP/detecteur_de_fumee.png" alt="icone capteur de fumée" title="capteur de fumée" />
				<span class="position_du_texte">Capteur de fumée<input type="checkbox" name="capteur_de_fumee"/></span>
			</div>
			 
		
		</div>
		<div id="conteneur8">
		     <input type="submit" value="Valider" />
		</div>
		</fieldset>
				
	</form>

</body>

</html>