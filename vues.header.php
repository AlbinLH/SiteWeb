<?php
/**
* Vue : entête HTML
*/
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="vues.header.css"/>
    
    <style>
        h1 {
        color:gray;
        }
    </style>
</head>
<body>

    <header>
        <h1><?php echo $title; ?></h1>
        <ul class="menu">
            <li class="logo"><img src=LOGO.png alt="logo"></li>
            <li><a href="#">Accueil</a></li>
            <li><a href="#">Mon profil</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Déconnexion</a></li>
        </ul>
    </header>
</body>
</html>
    
