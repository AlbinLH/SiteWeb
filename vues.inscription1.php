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

    
<div class="global">
<h1>Remplissez les champs suivants pour poursuivre votre inscription </h1>
    
<form method="POST" action="modele.inscription1.php">
<h2>Informations générales</h2>
    
<div class="conteneur">
    <input class="inputclassique" type="text" placeholder="Nom" name="nom" id="nom"/>
	<input class="inputclassique" type="text" placeholder="Prénom" name="prenom" id="prenom"/>   <input class="inputclassique" id="e-mail" type="text" placeholder="E-mail" name="mail" id="mail"/>
        
    <div id="genre">
        <label class="textinput">Genre</label>
        <input type="radio" name="gender" id="gender1" value="Homme" checked><label for="gender1" class="textinput">Homme</label> 
        <input type="radio" name="gender" id="gender2" value="Femme"><label for="gender2"class="textinput">Femme</label>
    </div>
    <input type="password" class="inputclassique" placeholder="Mot de passe" name="password" id="password"/>
    <input type="password" class="inputclassique" placeholder="Confirmer le mot de passe" name="passwordcheck" id="passwordcheck"/>  
	
</div>
	
<h2>Adresse</h2>
    
<div class="conteneur">
    <input type="text" class="inputclassique" placeholder="Numéro et nom de la rue" name="numbernameadress" id="numbernameadress" />
    <input type="text" class="inputclassique" placeholder="Code Postal" name="postalcode" id="postalcode" />
    <input type="text" class="inputclassique" placeholder="Ville" name="city" id="city"/>
    <input type="text" class="inputclassique" placeholder="Taille du logement en m²" name="taille" id="taille"/>
        
    <button type="submit" name="submit" onClick='verif()' id="inscrire"><label class="textinput">S'inscrire</label></button>
</div>
    
</form>
    
<br />
<br />
    
<form action="vues.connexion.php">
    <div id="retour">
    <button><label class="textinput">Retour</label></button>
    </div>
</form>
    
</div>
</body>
</html>
