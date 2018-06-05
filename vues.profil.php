<?php 
session_start();
//recuperer nom, prenom, adresse mail, tableau pieces avec capteurs dans chaque pièce
?>
<!DOCTYPE php>
<html lang="fr">
	<head>
		<link rel="stylesheet" href="vues.profil.css">
		<title>Connexion aux services</title>
	</head>
	<body>
        
    <div class="global">
	<form method='POST' action="vues.modif.php">
        <h1 class="text">MON PROFIL</h1><br />
			
        <p class="texte">NOM ET PRÉNOM :</p>
        <p class="info">
        <?php 
        if ($_SESSION['genre'] == 'Homme') {
        echo "Monsieur "; echo $_SESSION['prenom']; echo " ";  echo $_SESSION['nom'];
        } else {
        echo "Madame "; echo $_SESSION['prenom']; echo " ";  echo $_SESSION['nom']; 
        }
        ?>
        </p>	     
        <button class="bouton" type="submit" name="edit" value="changer_nom">Editer</button>
		
        <br />
        <p class="texte">ADRESSE DU LOGEMENT :</p>		
        <p class="info"><?php echo $_SESSION['adresse']; ?></p>		
        <button class="bouton" type="submit" name="edit" value="changer_adresse">Editer</button>
		
        <br />
        <p class="texte">ADRESSE MAIL :</p>
        <p class="info"><?php echo $_SESSION['adresse_mail']; ?></p>
        <button class="bouton" type="submit" name="edit" value="changer_adresse_mail">Editer</button>
		
        <br />
        <p class="texte">MOT DE PASSE :</p>
        <p class="info">********</p>
        <button class="bouton" type="submit" name="edit" value="changer_mot_de_passe">Editer</button>
		
	</form>
    </div>    
        
	</body>
</html>
