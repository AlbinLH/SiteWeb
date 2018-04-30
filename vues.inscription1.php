
<?php echo AfficheAlerte($alerte); ?>

<form method="POST" action="">
	
	<label>Mail :</label>
	<input type="text"  name="email" />
	
	<label>Adresse :</label>
	<input type="text" name="adresse" />
	
	<label>Mot de passe :</label>
	<input type="password"  name="password" />

    <button type="submit" name="submit">S'inscrire</button>

</form>

<p><a href="index.php">Retour</a></p>