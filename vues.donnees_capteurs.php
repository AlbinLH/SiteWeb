<!DOCTYPE html>
<html>
<head>
	<title>Données des capteurs</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="vues.donnees_capteurs.css" />
	</head>

<body>
<?php include 'vues.header.php';?>
	<h1 id='style_du_h1'>Données des capteurs</h1>
	<form action = "modele.donnees_capteurs.php" method = "POST">
		<p>
			<label for = "capteur" id="taille_du_texte">Choisissez un capteur et une pièce:</label></br>
				<select name="capteurs" id="capteurs">
					<option value="capteur de presence">Capteur de présence</option>
					<option value="thermometre">Thermommètre</option>
					<option value="capteur de luminosite">Capteur de luminosité</option>
					<option value="capteur humidite">Capteur d'humidité</option>
					<option value="capteur volet">Etat des volets</option>
					<option value="capteur de fumee">Capteur de fumée</option>

				</select name="pieces" id="pieces">
				<select>
<?php 
$bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', 'root');
$reponse = $bdd->query('SELECT Nom FROM piece');
while ($donnees1 = $reponse->fetch()) {?>

  <option value="<?php echo $donnees1["Nom"] ?>"><?php echo $donnees1['Nom']?></option>
        <?php } ?>				
				</select>
			<input type="submit"></input>
		</p>
	</form>

</body>
</html>