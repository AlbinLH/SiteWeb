<!DOCTYPE>
<html>
<head>
<meta charset="UTF-8" />
<title>Lares</title>
<link rel="stylesheet" href="ajout_de_pieces.css" />
</head>

<body>
	<p>
	
	
	<form method="post" action="piece.php">

	
		<div id="conteneur">

			<div class="taille_du_texte">Ajoutez une pièce:</div>
			<input type="text" name="nom_de_piece" id="nom_de_piece" placeholder="Saisir le nom de la pièce" /></br>
			<div class="taille_du_texte">Choisissez les capteurs disponibles dans cette pièce:</div>
		
		</div>
		</br>

		<div id="conteneur_principal">
			
			<div id="conteneur2">
		
				<img src="icone_site/capteur_de_presence.png"alt="icone capteur de présence" title="capteur de présence" />
				<span class="position_du_texte">Capteurde présence<input type="checkbox" name="capteur_de_presence" /></span>
			
			</div>	
			<div id="conteneur3">		
				<img src="icone_site/thermometre.png" alt="icone themomètre"title="thermomètre" />
				<span class="position_du_texte">thermomètre<input type="checkbox" name="thermometre"/></span>
			</div>
			<div id="conteneur4">
				<img src="icone_site/capteur_de_luminosite.png"alt="icone capteur de luminosité" title="capteur de luminosité" />
				<span class="position_du_texte">Capteurde luminosité<input type="checkbox" name="capteur_de_luminosite"/></span>
			</div>
			<div id="conteneur5">
				<img src="icone_site/capteur_d_humidite.png" alt="icone capteur d'humidité" title="capteur d'humidité" />
				<span class="position_du_texte">Capteur d'humidité<input type="checkbox" name="capteur_d_humidite"/></span>
			</div>
			<div id="conteneur6">
				<img src="icone_site/etat_des_volets.png" alt="icone etat des volets" title="état des volets" />
				<span class="position_du_texte">Etats des volets<input type="checkbox" name="etat_des_volets"/></span>
			</div>
			<div id="conteneur7">
				<img src="icone_site/detecteur_de_fumee.png" alt="icone capteur de fumée" title="capteur de fumée" />
				<span class="position_du_texte">Capteur de fumée<input type="checkbox" name="capteur_de_fumee"/></span>
			</div>
		
		</div>
				
	</form>

	</p>

</body>

</html>
