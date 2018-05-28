<!DOCTYPE html>
<html>

	<head>
	<title>Statistiques des capteurs</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="vues.statistiques_capteurs.css" />
	</head>

<body>
<?php include('vues.header.php');?>
	<h1 id='style_du_h1'>Historiques des capteurs</h1>
	<form action = "vues.statistiques_capteurs.php" method = "POST">
		<p>
			<label for = "capteur" id="taille_du_texte">Choisissez un capteur :</label></br>
				<select name="capteurs" id="capteurs">
					<option value="capteur de présence">Capteur de présence</option>
					<option value="thermometre">Thermommètre</option>
					<option value="capteur de luminosité">Capteur de luminosité</option>
					<option value="capteur d'humidité">Capteur d'humidité</option>
					<option value="etat des volets">Etat des volets</option>
					<option value="capteur de fumée">Capteur de fumée</option>
				</select>
			<input type="submit"></input>
		</p>
	</form>
</body>
</html>