<?php
session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=app;charset=utf8', 'root', '');
    
} catch (Exception $e)

{
    
    die('Erreur : ' . $e->getMessage());
    
}
if (!empty($_POST["ameliorer"])) {
    $message = $_POST["ameliorer"];
    $req_message = $bdd->prepare('INSERT INTO messagerie(Id_message, Expediteur, Destinataire, Contenu) VALUES(NULL, 2, 2, ?)');
    $req_message->execute(array($message));
    ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Validation messagerie</title>
        <link rel="stylesheet" href="modele.contact.css" />
    </head>
    <body>

         <p class= "element"> <img class ="picture" src="images site APP/ValidationIcone.png" alt="icone de validation" /> </p>
         <h1>Le message a bien été envoyé.</h1>
         <p class= "element1"> Votre demande sera traitée dans les meilleurs delais. </p>
         <div id="conteneur" >

           <form action="vues.accueil.php" method="GET">
	            <input type="submit" value="Retour à la page d'accueil" class="btn btn-primary" />
           </form>
           <form action="vues.contact.php" method="GET">
	            <input type="submit" value="Envoyer un autre mail" class="btn btn-primary" />
           </form>

         </div>
         
    </body>
<?php
} else {
//    $_SESSION["Expediteur"] $_SESSION["Destinataire"]
 include 'vues.refus_mail.php'; }
 ?>

