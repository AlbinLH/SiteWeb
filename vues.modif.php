<!DOCTYPE php>
<html lang="fr">
	<head>
		<link rel="stylesheet" href="">
		<title>Modification de vos données</title>
	</head>
<body>
<form method="POST" action="modele.modif.php">
<?php 
if ($_POST['edit'] == 'changer_nom') {
    ?>
    	<p class="text">Entrez votre nom et prenom :</p>
    	<input type='text' name='nom' id='nom'/>
    	<input type='text' name='prenom' id='prenom'/>
    	<?php 
} else if ($_POST['edit'] == 'changer_adresse') {
    ?> <p class="text">Entrez votre numéro et nom de rue :</p>
    	<input type='text' name='rue' id='rue'/>
    	<p class='text'>Entrez votre code postal</p>
    	<input type='text' name='code_postal' id='code_postal'/>
    	<p class="text">Entrez votre ville :</p>
    	<input type='text' name='ville' id='ville'/>
    	<?php 
} else if ($_POST['edit'] == 'changer_adresse_mail') {
    ?> <p class="text">Entrez votre adresse mail :</p>
    	<input type='text' name='identifiant' id='identifiant'/>
    	<?php 
} else if ($_POST['edit'] == 'changer_mot_de_passe') {
    ?> <p class="text">Entrez votre ancien mot de passe :</p>
    	<input type='password' name='old_mdp' id='old_mdp'/>
    	<p class="text">Entrez et confirmez votre nouveau mot de passe :</p>
    	<input type='password' name='mdp1' id='mdp1'/>
    	<input type='password' name='mdp2' id='mdp2'/>
    	<?php 
}
//

?>
<button type="submit" name="submit">Modifier</button>
</form>
</body>
</html>