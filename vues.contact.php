<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Messagerie</title>
        <link rel="stylesheet" href="vues.contact.css" />
    </head>

 	<body>
 		<?php include("vues.header.php");?>
     	<div class="conteneur">
     		<div class="element">
     			<p> Un problème ? Envoyez un message à nos administrateurs ! </p>
     		</div>
     		<div class="element">
     			<form method="post" action="traitement.php"> <!-- ATTENTION à traitement.php  -->  
     				<textarea name="ameliorer" id="ameliorer" placeholder="Saisir votre message" rows="15" cols="50"></textarea>
     			</form>
            <input type="submit" value="Envoyer" class="bouton_envoyer"/>
     		</div>
            <div class="element">
                <p class="contact">Ou contactez-nous : <br/> <br/>
                    Téléphone : 01 49 54 52 00 <br/> <br/>
                    Adresse : 28 rue Notre-Dame des Champs <br/> <br/> 
                75006 PARIS 
                </p>
            </div>    
     	</div>
</body>
</html>