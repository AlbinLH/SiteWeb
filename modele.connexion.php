<?php

// On démarre la session AVANT d'écrire du code HTML

session_start();


?>
<!DOCTYPE = php>
<html lang="fr">
	<head>
		<title>Connexion aux services</title>
	</head>
	<body>
<?php
$id2;
$compte = $_POST['login'];
$mdp = $_POST['pass']; //a sécuriser
$test= 0;

try
{
$bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrète tout
    die('Erreur : '.$e->getMessage());
}



$reponse = $bdd->query('SELECT Identifiant, Mot_de_passe FROM personne'); //à sécuriser


while ($donnees = $reponse->fetch()) {
    if ($mdp==$donnees['Mot_de_passe'] AND $compte==$donnees['Identifiant']) {
        $test = 1;
        $req_nom = $bdd->prepare("SELECT Nom FROM personne WHERE Identifiant = ?");
        $req_nom->execute(array($compte));
        while ($resu_nom = $req_nom->fetch())
        {
            $_SESSION['nom'] = $resu_nom['Nom'];
        }
        $req_prenom = $bdd->prepare("SELECT Prenom FROM personne WHERE Identifiant = ?");
        $req_prenom->execute(array($compte));
        while ($resu_prenom = $req_prenom->fetch())
        {
            $_SESSION['prenom'] = $resu_prenom['Prenom'];
        }
        
        
        $id = $bdd->prepare("SELECT Id_personne FROM personne WHERE Identifiant = ? AND Mot_de_passe = ?");
        $id->execute(array($donnees['Mot_de_passe'], $donnees['Identifiant']));
        while ($donnees2 = $id->fetch())
        {
            $_SESSION['idlogement'] = $donnees2['Id_personne'];
        }
        $droits = $bdd->prepare("SELECT Niveau_d_admin FROM administrateur WHERE  Id_person = ?");
        $droits->execute(array( $_SESSION['idlogement']));
        while ($donnees3 = $droits->fetch())
        {
           $droits2 = $donnees3['Niveau_d_admin'];
        }
        $droits->closeCursor();
        $id->closeCursor();
       
        break;
        }
}


if ($test == 0 ) {
    echo "<p><font color='red'>Identifiants erronés </font></p><br/>";
    include("vues.connexion.php");
} else if ($droits2 == 2 AND $test==1) {
    include("vues.admin.php"); //redirection pages admin
} else if ($droits2 == null AND $test == 1) {
    include('vues.accueil.php'); //redirection compte classique
}
$reponse->closeCursor(); // Termine le traitement de la requ�te


?>
</body>
</html>

