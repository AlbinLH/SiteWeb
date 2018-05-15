<!DOCTYPE = php>
<html lang="fr">
<head>
	<title>Inscription aux services</title>
	<link rel="stylesheet" href="vues.connexion.css"/>
</head>
<body>
<?php
$mail = $_POST['mail'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$gender = $_POST['gender'];
$numbernameadress = $_POST['numbernameadress'];
$postalcode = $_POST['postalcode'];
$city = $_POST['city'];
$password = $_POST['password']; //a s�curiser
$passwordcheck = $_POST['passwordcheck'];
$taillelogement = $_POST["taille"];

try {
$bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', 'root');
}
catch(Exception $e) {
    // En cas d'erreur, on affiche un message et on arr�te tout
    die('Erreur : '.$e->getMessage());
}
//if ($mail == '' OR $nom == '' OR $prenom =='' OR $numbernameadress == '' OR $postalcode == '' OR $city == '' OR $password == '' OR $passwordcheck == '' OR $taillelogement == '') {
    //echo "Vous n'avez pas saisi toutes les informations";
    //include('vues.inscription1.php');
//} else {
    $request = $bdd->prepare("SELECT Identifiant FROM personne WHERE Identifiant = ?");
    $request->execute(array($mail));
    foreach($request as $result) {
        $response = $result['Identifiant'];
    }
    $request->closeCursor(); // Termine le traitement de la requ�te
    if ($response == null) {
        if (strlen($password)>=8) {
        if ($password==$passwordcheck) {
            try {
                $bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', 'root');
            }
            catch(Exception $e) {
                // En cas d'erreur, on affiche un message et on arr�te tout
                die('Erreur : '.$e->getMessage());
            }
            $inscription1 = $bdd->prepare("INSERT INTO personne (Id_personne, Nom, Prenom, Identifiant, Mot_de_passe, GENRE) VALUES (NULL, ?, ?, ?, ?, ?)"); //Ajouter les champs � la base de donn�es //Securiser contre les injections sql
            $inscription1->execute(array($nom, $prenom, $mail, $password, $gender));
            
            $recupid = $bdd->prepare("SELECT Id_personne FROM personne WHERE Identifiant = ? AND Mot_de_passe = ?"); //recuperation id personne pour id logement
            $recupid->execute(array($mail, $password));
            foreach($recupid as $result2) {
                $response2 = $result2['Id_personne'];
            }
            $inscription2 = $bdd->prepare("INSERT INTO logement (Id_logement, Superficie) VALUES (?, ?)"); //Ajouter les champs � la base de donn�es //Securiser contre les injections sql
            $inscription2->execute(array($response2, $taillelogement));
            
            $inscription3 = $bdd->prepare("INSERT INTO utilisateur (Id_person,Adresse, Ville, Code_postal) VALUES (?, ?, ?, ?)"); //Ajouter les champs � la base de donn�es //Securiser contre les injections sql
            $inscription3->execute(array($response2, $numbernameadress, $city, $postalcode));
            
             // Termine le traitement de la requ�te
            
            echo "<p><font color='red'>Votre inscription a bien été prise en compte. Veuillez vous connecter pour continuer</font></p><br/>";
            include('vues.connexion.php');
            $inscription1->closeCursor();
            $inscription2->closeCursor();
            $inscription3->closeCursor();
            $recupid->closeCursor();
            
        } else {
            echo "<p><font color='red'>Mots de passe non identique</font></p><br/>"; 
    	   include('vues.inscription1.php'); 
        }
        } else {
            echo "<p><font color='red'>Le mot de passe doit contenir au moins 8 caractères</font></p><br/>";
            include('vues.inscription1.php');
        }
        
    } else {
        echo "<p><font color='red'>Identifiant deja utilisé</font></p><br/>";
        include('vues.inscription1.php');
    
    }
    
//}

?>

</body>
</html>

