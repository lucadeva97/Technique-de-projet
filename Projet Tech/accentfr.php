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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variations du français</title>
    <link rel="stylesheet" href="sty.css">
    <link rel="icon" href="minilogo.png" type="image/png">
        <!-- Add meta tags for better mobile responsiveness -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="mobile-web-app-capable" content="yes">
    <style>
        .hover-effect {
            transition: transform 0.3s;
        }
        .hover-effect:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<?php
if (!isset($_SESSION['nom']) || !isset($_SESSION['email']) || 
!isset($_SESSION['prenom']) || !isset($_SESSION['niveau']) || 
!isset($_SESSION['statu'])) { 

?>
<header>
    <div class="header-container">
        <div class="left-align">
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
        <a href="index.php"><div class="logo" data-tooltip="homepage">
        </div></a>
        <div></div>
        <div class="right-align">
            <a href="apropos.php"><div class="apropos" data-tooltip="à propos">
            </div></a>
            <a href="compte/compte.php"><div class="connexion" data-tooltip="connexion">
            </div></a>
        </div>
    </div>
</header>
<!-- Fin header -->
<?php 
} else { 
?>
<header>
    <div class="header-container">
        <div class="left-align">
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
        <a href="index.php"><div class="logo" data-tooltip="homepage">
        </div></a>
        <div></div>
        <div class="right-align">
            <a href="apropos.php"><div class="apropos" data-tooltip="à propos">
            </div></a>
            <a href="compte/compte.php"><div class="connexion2" data-tooltip="connexion2">
            </div></a>
        </div>
    </div>
</header>
<!-- Fin header -->
<?php
}
?>

<h1 class="titre">Les variations du français</h1>

<div id="tuiles_conteneur">
<div id="tuile_cayenne" class="tuiles">
    <img src="images/cayenne.jpg" alt="cayenne" class="image_tuile"></a>
    <br>    
    <i>Cayenne (Guyane Française)</i>
</div>
<div id="tuile_fortdefrance" class="tuiles">
    <img src="images/fortdefrance.png" alt="fortdefrance" class="image_tuile"></a>
    <br>    
    <i>Fort de France (Martinique)</i>
</div>
<div id="tuile_grenoble" class="tuiles">
    <a href="grenoble.php"><img src="images/grenoble.jpeg" alt="grenoble" class="image_tuile hover-effect"></a>
    <br>    
    <i>Grenoble</i>
</div>
<div id="tuile_marseille" class="tuiles">
    <img src="images/marseille.JPG" alt="marseille" class="image_tuile">
    <br>    
    <i>Marseille</i>
</div>
<div id="tuile_montpellier" class="tuiles">
    <img src="images/montpellier.JPG" alt="montpellier" class="image_tuile">
    <br>    
    <i>Montpellier</i>
</div>
<div id="tuile_montreal" class="tuiles">
    <a href="quebec.php"><img src="images/montreal.jpeg" alt="montreal" class="image_tuile hover-effect"></a>
    <br> 
    <i>Montréal (Québec)</i>
</div>
<div id="tuile_paris" class="tuiles">
    <img src="images/paris.JPG" alt="paris" class="image_tuile"></a>
    <br>
    <i>Paris</i>
</div>
<div id="tuile_toulouse" class="tuiles">
    <img src="images/toulouse.JPG" alt="toulouse" class="image_tuile">
    <br>
    <i>Toulouse</i>
</div>
</div>
<br> <br> <br>
<script src="scripts.js"></script>
</body>
</html>

<?php 

    } else {
        echo "<script>
            alert('Connecte-toi pour accéder à nos activités.');
            setTimeout(function() {
                window.location.href = 'compte/connexion.php';
            }, 1000);
        </script>";
        exit();
    }
    ?>
