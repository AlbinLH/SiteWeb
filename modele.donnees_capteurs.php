<?php session_start(); ?>

<?php 

try
{
    $bdd = new PDO('mysql:host=localhost;dbname=lares;charset=utf8', 'root', 'root');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrète tout
    die('Erreur : '.$e->getMessage());
}

if (!empty($_POST['capteurs'])){
    
    
    $reponse = $bdd->prepare('SELECT Valeur FROM capteur WHERE Nom= ?');
    $reponse->execute(array($_POST['capteurs']));
    while ($donnees = $reponse->fetch()) {
        
        echo '<p>' . $donnees['Valeur'] . '</p>';
    }
    
}


?>