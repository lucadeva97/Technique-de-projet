<?php
session_start();

if (isset($_SESSION['nom']) && isset($_SESSION['email']) && 
isset($_SESSION['prenom']) && isset($_SESSION['niveau']) && 
isset($_SESSION['statu'])) { 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sobre nós</title>
    <link rel="stylesheet" href="sty.css">
    <link rel="icon" href="minilogo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header>
    <div class="header-container">
        <div class="left-align">
            <div class="language-selector">
                <div class="language-selector">
                <select id="language-select" onchange="changeLanguage()">
                <option value="" class="accent">Tu cherches une langue ? </option>
                <option value="es" disabled style="color: grey;">Espagnol</option>
                <option value="fr"><a href="accentfr.php" class="accent" data-lang="fr">Français</a></option>
                <option value="it" disabled style="color: grey;">Italien</option>
                <option value="pt" disabled style="color: grey;">Portugais</option>
            </select>
        </div>
            </div>
        </div>
        <a href="index.php"><div class="logo" data-tooltip="homepage"></div></a>
        <div></div>
        <div class="right-align">
            <a href="apropos.php"><div class="apropos" data-tooltip="à propos"></div></a>
            <a href="compte/inscripion.php"><div class="connexion" data-tooltip="connexion"></div></a>
        </div>
    </div>
</header>
    <!-- Fin header -->
    <div class="contenu">
        <div class="nous4">
            <div class="nous-div">
                <img src="images/shishi.jpeg" alt="shishi"  class="nous_images">
                <div class="text1">Cliente - Shirihane CHIBANI</div>
            </div>
            <div class="nous-div">
                <img src="images/nes.jpeg" alt="nes" class="nous_images">
                <div class="text1">Product Owner - Neslihan OZCAN</div>
            </div>
            <div class="nous-div">
                <img src="images/luca.jpeg" alt="luca" class="nous_images">
                <div class="text1">Scrum Master - Luca DE VALERIO</div>
            </div>
            <div class="nous-div">
                <img src="images/shai.jpg" alt="shaiane" class="nous_images">
                <div class="text1">Development Team - Shaiane NEVES</div>
            </div>
        </div>
        <div class="informations">
            <p class="cadre_apropos">Qui sommes-nous ? <br>
                Nous sommes quatre étudiant·e·s diplômé·e·s en ingénierie pédagogique, spécialistes de la conception, du développement et de l’évaluation de dispositifs d’apprentissage innovants. 🧰 
                <br>
                Notre formation nous permet de maîtriser les outils numériques, les théories de l’apprentissage et les méthodologies de conception pédagogique. ✏️ 
                <br>
                Notre site a pour but de te montrer les différentes manières de parler (accents, variations lexicales et aspects culturels) en espagnol, français, italien et portugais. 🗣️
                <br>
                Pour cela, tu pourras explorer la carte et écouter un habitant de la ville qui te la présentera et te fera découvrir ce qu’il y a à faire. C’est aussi l’occasion parfaite d’en apprendre plus sur ta prochaine destination ! <a href=" http://i3l.univ-grenoble-alpes.fr/~dasilva/cartophonie/">Allons-y ?</a> 🗺️
                </p>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <p>&copy; 2025 Cartophonie. Tous droits réservés.</p>
        </div>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>

<?php 

    } else {
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Sobre nós</title>
    <link rel="stylesheet" href="sty.css">
    <link rel="icon" href="minilogo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<header>
    <div class="header-container">
        <div class="left-align">
            <div class="language-selector">
                <div class="language-selector">
                <select id="language-select" onchange="changeLanguage()">
                <option value="" class="accent">Tu cherches une langue ? </option>
                <option value="es" disabled style="color: grey;">Espagnol</option>
                <option value="fr"><a href="compte/inscription.php" class="accent" data-lang="fr">Français</a></option>
                <option value="it" disabled style="color: grey;">Italien</option>
                <option value="pt" disabled style="color: grey;">Portugais</option>
            </select>
        </div>
            </div>
        </div>
        <a href="index.php"><div class="logo" data-tooltip="homepage"></div></a>
        <div></div>
        <div class="right-align">
            <a href="apropos.php"><div class="apropos" data-tooltip="à propos"></div></a>
            <a href="compte/inscription.php"><div class="connexion" data-tooltip="connexion"></div></a>
        </div>
    </div>
</header>
    <!-- Fin header -->
    <div class="contenu">
        <div class="nous4">
            <div class="nous-div">
                <img src="images/shishi.jpeg" alt="shishi"  class="nous_images">
                <div class="text1">Cliente - Shirihane CHIBANI</div>
            </div>
            <div class="nous-div">
                <img src="images/nes.jpeg" alt="nes" class="nous_images">
                <div class="text1">Product Owner - Neslihan OZCAN</div>
            </div>
            <div class="nous-div">
                <img src="images/luca.jpeg" alt="luca" class="nous_images">
                <div class="text1">Scrum Master - Luca DE VALERIO</div>
            </div>
            <div class="nous-div">
                <img src="images/shai.jpg" alt="shaiane" class="nous_images">
                <div class="text1">Development Team - Shaiane NEVES</div>
            </div>
        </div>
        <div class="informations">
            <p class="cadre_apropos">Qui sommes-nous ? <br>
                Nous sommes quatre étudiant·e·s diplômé·e·s en ingénierie pédagogique, spécialistes de la conception, du développement et de l’évaluation de dispositifs d’apprentissage innovants. 🧰 
                <br>
                Notre formation nous permet de maîtriser les outils numériques, les théories de l’apprentissage et les méthodologies de conception pédagogique. ✏️ 
                <br>
                Notre site a pour but de te montrer les différentes manières de parler (accents, variations lexicales et aspects culturels) en espagnol, français, italien et portugais. 🗣️
                <br>
                Pour cela, tu pourras explorer la carte et écouter un habitant de la ville qui te la présentera et te fera découvrir ce qu’il y a à faire. C’est aussi l’occasion parfaite d’en apprendre plus sur ta prochaine destination ! <a href=" http://i3l.univ-grenoble-alpes.fr/~dasilva/cartophonie/">Allons-y ?</a> 🗺️
                </p>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <p>&copy; 2025 Cartophonie. Tous droits réservés.</p>
        </div>
    </footer>
    <script src="scripts.js"></script>
</body>
</html>

<?php 
}
?>
