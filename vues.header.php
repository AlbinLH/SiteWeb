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

    <div class="topbar" id="navbar">
    <div class="logo"><img src=LOGO.png alt="logo"></div>
    <a href="#home">Accueil</a>
    <a href="#news">News</a>
    <div class="profil">
        <button class="profilbtn">Mon profil</button>
        <div class="profil-content">
            <a href="#">Suivi conso</a>
            <a href="#">Statistiques</a>
            <a href="#">Reglages</a>
            <a href="#">Deconnexion</a>
        </div>
    </div> 
    <a href="#contact">Contact</a>
    <a href="#propos">A propos</a> 
    <div class="langues"> 
        <a class="icon-fr" href="#"><img src="fr.svg" alt="icon-fr"></a>
        <a class="icon-gb" href="#"><img src="gb.svg" alt="icon-gb"></a>
    </div>
    </div>
    
    <script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
    </script>
    
</body>
</html>
