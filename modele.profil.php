<?php 
session_start(); 

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrète tout
    die('Erreur : '.$e->getMessage());
}

$req_genre = $bdd->prepare('SELECT GENRE, Nom, Prenom, Mot_de_passe, Identifiant FROM personne WHERE Id_personne = ?');
$req_genre->execute(array($_SESSION['id_personne']));
while ($donnee = $req_genre->fetch()) {
    $_SESSION['genre'] = $donnee['GENRE'];
    $_SESSION['nom'] = $donnee['Nom'];
    $_SESSION['prenom'] = $donnee['Prenom'];
    $_SESSION['mdp'] = $donnee['Mot_de_passe'];
    $_SESSION['adresse_mail'] = $donnee['Identifiant'];
    
    
}
$req_genre->closeCursor();



$req_adresse = $bdd->prepare("SELECT Adresse, Ville, Code_postal FROM utilisateur WHERE Id_person = ?");
$req_adresse->execute(array($_SESSION['id_personne'])); 
while ($adresse_data = $req_adresse->fetch()) {
    $_SESSION['adresse'] = $adresse_data['Adresse'].", ".$adresse_data['Ville'].", ".$adresse_data['Code_postal'];
}
$req_adresse->closeCursor();


include('vues.profil.php');
?>

