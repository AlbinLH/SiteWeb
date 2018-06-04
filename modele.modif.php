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


if (!empty($_POST['nom']) AND !empty($_POST['prenom'])) {
    echo $_POST['nom'];
    echo $_POST['prenom'];
    echo $_SESSION['id_personne'];
    $edit_nom = $bdd->prepare("UPDATE personne SET Prenom = ?, Nom = ? WHERE Id_personne = ?");
    $edit_nom->execute(array($_POST['prenom'], $_POST['nom'], $_SESSION['id_personne']));
    echo "1";
    $edit_nom->closeCursor();
} else if (!empty($_POST['rue']) AND !empty($_POST['code_postal']) AND !empty($_POST['ville'])) {
    $edit_adresse = $bdd->prepare("UPDATE utilisateur SET Adresse = ?, Ville = ?, Code_postal = ? WHERE Id_person = ?");
    $edit_adresse->execute(array($_POST['rue'], $_POST['ville'], $_POST['code_postal'], $_SESSION['id_personne']));
    $edit_adresse->closeCursor();
} else if (!empty($_POST['identifiant'])) {
    $edit_identifiant = $bdd->prepare("UPDATE personne SET Identifiant = ? WHERE Id_personne = ?");
    $edit_identifiant->execute(array($_POST['identifiant'], $_SESSION['id_personne']));
    $edit_identifiant->closeCursor();
} else if (!empty($_POST['mdp1']) AND !empty($_POST['mdp2'])) {
    if ($_POST['old_mdp'] == $_SESSION['mdp'] AND $_POST['mdp1'] == $_POST['mdp2']) {
        echo '1';
        echo $_POST['mdp1'];
        $edit_mdp = $bdd->prepare("UPDATE personne SET Mot_de_passe = ? WHERE Id_personne = ?");
        $edit_mdp->execute(array($_POST['mdp1']), $_SESSION['id_personne']);
        $edit_mdp->closeCursor();
    } else {
        echo "Le mot de passe est érroné ou les nouveaux mots de passe ne sont pas identiques";
        
    }
}

 ///Ajouter les differents cas + button submit sur la page d'avant
 include("modele.profil.php");
?>