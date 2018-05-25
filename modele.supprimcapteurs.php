<?php
session_start();
?>
<!DOCTYPE=php>
<html>
<head>
	<title>Suppression de capteur</title>
</head>
<body>

<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', 'root');
    
} catch (Exception $e)

{
    
    die('Erreur : ' . $e->getMessage());
    
}
$capteurs = explode(".", $_POST['capteurselectionné']);
$idpiece = $capteurs[0];
$nomcapteur = $capteurs[1];

echo "1";

$idcapteur = $bdd->prepare("SELECT Id_capteur FROM capteur WHERE Nom = ? AND Id_piece = ?");
$idcapteur->execute(array($nomcapteur, $idpiece));
while ($donnees = $idcapteur->fetch())
{
    $IDcapt = $donnees['Id_capteur'];
}
echo "2";
$idcapteur->closeCursor();

$deletecapteur = $bdd->prepare('DELETE FROM capteur WHERE Id_capteur = ?');
$deletecapteur->execute(array($IDcapt));
$deletecapteur->closeCursor();
echo "3";

?>

<img class ="picture" src="ValidationIcone.png" alt="icone de validation" />
<h1>Les modifications ont bien été sauvegardées.</h1>
<form action="vues.accueil.php" method="GET">
<input type="submit" value="Retour à la page d'accueil" class="btn btn-primary" />
</form>


