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
     		<div class="element1">
     			<p> Un problème ? Envoyez un message à nos administrateurs ! </p>
     		</div>
     		
     		<form method="post" action="modele.contact.php"> <!-- ATTENTION à traitement.php  -->
     		    <div class="element2">
     				<textarea name="ameliorer" id="ameliorer" placeholder="Saisir votre message" rows="15" cols="50"></textarea>
     				<p class="bouton"> <input type="submit" value="Envoyer" class="bouton_envoyer"/> </p>
     			</div>
     			
            </form>

            <div>
                <p class="contact">Ou contactez-nous : <br/> <br/>
                    Téléphone : 01 49 54 52 00 <br/> <br/>
                    Adresse : 28 rue Notre-Dame des Champs <br/> <br/> 
                75006 PARIS 
                </p>
            </div>    
     	</div>
     	
</body>
</html>