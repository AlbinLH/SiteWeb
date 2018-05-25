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
        <div class="menu">
            <div class="logo"><img src=LOGO.png alt="logo"></div>
            <a href="vues.accueil.php">Accueil</a>
            <a href="#">Mon profil</a>
            <a href="vues.contact.php">Contact</a>
            <a href="vues.connexion.php">À propos</a>
        </div>
    </header>
</body>
</html>
