<form method="POST" action="modele.inscription1.php">
	
	<label>Mail :*</label>
	<input type="text"  name="email" id="mail"/>
	
	<label>Genre :*</label>
	<input type="radio" name="gender" id="gender" value="male" checked> Male<br>
  	<input type="radio" name="gender" id="gender" value="female"> Female<br>
  	<input type="radio" name="gender" id="gender" value="other"> Other<br>
	
	<p>Adresse :</p><br>
	<label>Numéro et nom de la rue*</label>
	<input type="text" name="numbernameadress" id="numbernameadress" />
	
	<label>Code postal*</label>
	<input type="text" name="postalcode" id="postalcode" />
	
	<label>Ville*</label>
	<input type="text" name="city" id="city"/>
	
	<label>Mot de passe :*</label>
	<input type="password"  name="password" id="password"/>
	
	<label>Confirmer le mot de passe :*</label>
	<input type="password"  name="passwordcheck" id="passwordcheck"/>

	<label>Taille du logement*</label>
	<input type="text" name="taille" id="taille"/>

    <button type="submit" name="submit">S'inscrire</button>

</form>

<p><a href="vues.connexion.php">Retour</a></p>
