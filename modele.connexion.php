<!DOCTYPE = php>
<html lang="fr">
	<head>
		<title>Connexion aux services</title>
		<meta http-equiv="refresh" content="1; URL=redirection.php">
	</head>
	<body>
<?php
$compte = $_POST['login'];
$mdp = $_POST['pass'];
$test= 0;

try
{
$bdd = new PDO('mysql:host=localhost;dbname=users;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arr�te tout
    die('Erreur : '.$e->getMessage());
}


$reponse = $bdd->query('SELECT * FROM verifiedusers');


while ($donnees = $reponse->fetch())
{   
if ($mdp==$donnees['Pass'] AND $compte==$donnees['Login']) {
    echo "Connect�";
    $test=1;
    $lien = "Menu.php";
    break;
    }
}

if ($test==0) {
    $lien = "vues.connexion.php";
    echo "Identifiants erron�s";
}

$reponse->closeCursor(); // Termine le traitement de la requ�te

?>
</body>
</html>

