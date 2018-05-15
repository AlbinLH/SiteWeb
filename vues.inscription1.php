<html>
<header>
	<title>Inscription aux services LARES</title>
	<link rel="stylesheet" href="vues.inscription1.css">
</header>
<body>
<script type=text/javascript>
function verif() {
	if(document.getElementById('nom').value == '' || document.getElementById('prenom').value == '' || document.getElementById('mail').value == '' || document.getElementById('numbernameadress').value == '' || document.getElementById('city').value == '' || document.getElementById('postalcode').value == '' || document.getElementById('password').value == '' || document.getElementById('passwordcheck').value == '' || document.getElementById('taille').value == ''){
		alert('bouh !');
		return false;
	} 
	else { return true; }
	}
</script>

<h1>Remplissez les champs suivants pour poursuivre votre inscription :</h1>
<form method="POST" action="modele.inscription1.php">
<h1>Informations générales :</h1>
	<div class="conteneur">
		<div class="élément">
		<input class="inputclassique" type="text" placeholder="Nom" name="nom" id="nom"/></div>
		<div class="élément">
		<input class="inputclassique" type="text" placeholder="Prénom" name="prenom" id="prenom"/></div>
	</div>
	
		
	<div class="conteneur">
		<div class="élément">
			<input class="inputclassique" id="e-mail" type="text" placeholder="E-mail" name="mail" id="mail"/>
		</div>
		<div class="élément">
			<table>
				<tr>
					<td>
						<label class="textinput">Genre :</label>
					</td>
					<td> 
						<input class="inputradio" type="radio" name="gender" id="gender1" value="Homme" checked>
						<label for="gender1" class="textinput">Homme</label> 
					</td>
				</tr>
				<tr>
				<td></td>
					<td>
  						<input class="inputradio" type="radio" name="gender" id="gender2" value="Femme">
  						<label for="gender2"class="textinput">Femme</label> 
  					</td>
  				</tr>
  			</table>
  		</div>
  	</div>

	<div class="conteneur">
		<div class="élément">
			<input type="password" class="inputclassique" placeholder="Mot de passe" name="password" id="password"/>
		</div>
		<div class="élément">
			<input type="password" class="inputclassique" placeholder="Confirmer le mot de passe" name="passwordcheck" id="passwordcheck"/>
		</div>
	</div>
	
	<h1 class="blocktext">Adresse :</h1>
	<div class="conteneur">
		<div class="élément">
			<input type="text" class="inputclassique" placeholder="Numéro et nom de la rue" name="numbernameadress" id="numbernameadress" />
		</div>
		<div class="élément">
			<input type="text" class="inputclassique" placeholder="Code Postal" name="postalcode" id="postalcode" />
		</div>
	</div>
	<div class="conteneur">
		<div class="élément">
			<input type="text" class="inputclassique" placeholder="Ville" name="city" id="city"/>
		</div>
		<div class="élément">
			<input type="text" class="inputclassique" placeholder="Taille du logement en m²" name="taille" id="taille"/>
		</div>
	</div>
	</br>
	<div class="conteneur">
		<div class="élément">
			<button type="submit" name="submit" onClick='verif()'><label class="textinput">S'inscrire</label></button>
		</div>
	</div>
</form>
</br>
</br>
<form action="vues.connexion.php">
	<div class="conteneur">
		<div class="élément">
			<button><label class="textinput">Retour</label></button>
		</div>
	</div>
</form>
</body>
</html>