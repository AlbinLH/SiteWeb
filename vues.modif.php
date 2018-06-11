<!DOCTYPE php>
<html lang="fr">
	<head>
		<link rel="stylesheet" href="vues.modif.css">
		<title>Modification de vos données</title>
	</head>
<body>
    
<div class="global">

<form method="POST" action="modele.modif.php">
<?php 
if ($_POST['edit'] == 'changer_nom') {
    ?>
    	<p class="texte">Entrez votre nom et prenom :</p>
    	<input type='text' name='nom' id='nom' class="modif"/>
    	<input type='text' name='prenom' id='prenom' class="modif"/>
    	<?php 
} else if ($_POST['edit'] == 'changer_adresse') {
    ?> <p class="texte">Entrez votre numéro et nom de rue :</p>
    	<input type='text' name='rue' id='rue' class="modif"/>
    	<p class="texte">Entrez votre code postal</p>
    	<input type='text' name='code_postal' id='code_postal' class="modif"/>
    	<p class="texte">Entrez votre ville :</p>
    	<input type='text' name='ville' id='ville' class="modif"/>
    	<?php 
} else if ($_POST['edit'] == 'changer_adresse_mail') {
    ?> <p class="texte">Entrez votre adresse mail :</p>
    	<input type='text' name='identifiant' id='identifiant' class="modif"/>
    	<?php 
} else if ($_POST['edit'] == 'changer_mot_de_passe') {
    ?> <p class="texte">Entrez votre ancien mot de passe :</p>
    	<input type='password' name='old_mdp' id='old_mdp' class="modif"/>
    	<p class="texte">Entrez et confirmez votre nouveau mot de passe :</p>
    	<input type='password' name='mdp1' id='mdp1' class="modif"/>
    	<input type='password' name='mdp2' id='mdp2' class="modif"/>
    	<?php 
}


?>
<button type="submit" name="submit">Modifier</button>
</form>
    
</div>
</body>
</html>
