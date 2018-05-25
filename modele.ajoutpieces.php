<?php
session_start();

try {
    $bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', 'root');
    
} catch (Exception $e)

{
    
    die('Erreur : ' . $e->getMessage());
    
}
if (!empty($_POST['nom_de_piece'])) {
    $piece_ajout = $_POST['nom_de_piece'];
    $req_piece = $bdd->prepare('INSERT INTO piece(Id_piece, Nom, Id_logement) VALUES(NULL, ?, ?)');
    $req_piece->execute(array($piece_ajout, $_SESSION['idlogement']));
    $req_piece->closeCursor();
    
    ?>
    <img class ="picture" src="ValidationIcone.png" alt="icone de validation" />
    <h1>Les modifications ont bien été sauvegardées.</h1>
    <form action="vues.accueil.php" method="GET">
    <input type="submit" value="Retour à la page d'accueil" class="btn btn-primary" />
    </form>
    <?php
    
} else {
    
    include('vues.ajoutpieces.php');
    echo 'veuillez rentrer un nom de pièce';
}
?>
