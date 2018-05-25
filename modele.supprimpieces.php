<?php
session_start();
?>
<!DOCTYPE=php>
<html>
<head>
	<title>Suppression de pièces</title>
</head>
<body>

<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', 'root');
    
} catch (Exception $e)

{
    
    die('Erreur : ' . $e->getMessage());
    
} 
    $piece_suppr = $_GET['nom_de_piece'];
    $req_idpiece = $bdd->prepare('SELECT Id_piece FROM piece WHERE Id_logement = ? AND Nom = ?');
    $req_idpiece->execute(array($_SESSION['idlogement'], $piece_suppr));
    while ($donnees = $req_idpiece->fetch()) {
        $idpiece = $donnees['Id_piece'];
    }
    $req_idpiece->closeCursor();

    $req_piece = $bdd->prepare('DELETE FROM piece WHERE Id_logement = ? AND Nom = ?');
    $req_piece->execute(array($_SESSION['idlogement'], $piece_suppr));
    $req_piece->closeCursor();
    
    $req_capteurs = $bdd->prepare('DELETE FROM capteur WHERE Id_piece = ?');
    $req_capteurs->execute(array($idpiece));
    $req_capteurs->closeCursor();
    ?>

<img class ="picture" src="ValidationIcone.png" alt="icone de validation" />
<h1>Les modifications ont bien été sauvegardées.</h1>
<form action="vues.accueil.php" method="GET">
	<input type="submit" value="Retour à la page d'accueil" class="btn btn-primary" />
</form>
</body>
</html>