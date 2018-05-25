<?php 
$piece = $_POST['pieceselectionnée'];
include('vues.header.php');
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arr�te tout
    die('Erreur : '.$e->getMessage());
}
$req_id_piece = $bdd->prepare('SELECT Id_piece FROM piece WHERE Nom = ?');
$req_id_piece->execute(array($piece));
while ($result = $req_id_piece->fetch())
{
    $IDpiece = $result['Id_piece'];
}

$req_id_piece->closeCursor();

if (isset($_POST['capteur_de_presence'])) {
    $req_capteur_presence = $bdd->prepare('INSERT INTO capteur(Nom, Type_de_donnees,  Id_piece) VALUES("capteur de presence", "boolean", ?)');
    $req_capteur_presence->execute(array($IDpiece));
    $req_capteur_presence->closeCursor();
    
}
if (isset($_POST['thermometre'])) {
    $req_capteur_thermometre = $bdd->prepare('INSERT INTO capteur(Nom, Type_de_donnees,  Id_piece) VALUES("thermometre", "int", ?)');
    $req_capteur_thermometre->execute(array($IDpiece));
    $req_capteur_thermometre->closeCursor();
}
if (isset($_POST['capteur_de_luminosite'])) {
    $req_capteur_luminosite = $bdd->prepare('INSERT INTO capteur(Nom, Type_de_donnees,  Id_piece) VALUES("capteur de luminosite", "int", ?)');
    $req_capteur_luminosite->execute(array($IDpiece));
    $req_capteur_luminosite->closeCursor();
}
if (isset($_POST['capteur_d_humidite'])) {
    $req_capteur_d_humidite = $bdd->prepare('INSERT INTO capteur(Nom, Type_de_donnees,  Id_piece) VALUES("capteur humidite", "int", ?)');
    $req_capteur_d_humidite->execute(array($IDpiece));
    $req_capteur_d_humidite->closeCursor();
}
if (isset($_POST['etat_des_volets'])) {
    $req_etat_volet = $bdd->prepare('INSERT INTO capteur(Nom, Type_de_donnees,  Id_piece) VALUES("capteur volet", "boolean", ?)');
    $req_etat_volet->execute(array($IDpiece));
    $req_etat_volet->closeCursor();
}
if (isset($_POST['capteur_de_fumee'])) {
    $req_capteur_de_fumee = $bdd->prepare('INSERT INTO capteur(Nom, Type_de_donnees,  Id_piece) VALUES("capteur de fumee", "int", ?)');
    $req_capteur_de_fumee->execute(array($IDpiece));
    $req_capteur_de_fumee->closeCursor();  
    
}
?>
<img class ="picture" src="ValidationIcone.png" alt="icone de validation" />
<h1>Les modifications ont bien été sauvegardées.</h1>
<form action="vues.accueil.php" method="GET">
	<input type="submit" value="Retour à la page d'accueil" class="btn btn-primary" />
</form>