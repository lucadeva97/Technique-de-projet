<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartophonie</title>
    <link rel="stylesheet" href="sty.css">
    <link rel="icon" href="minilogo.png" type="image/png">
</head>


<header>
    <div class="header-container">
        <div class="left-align">
            <button id="tutoriel-tooltip" data-tooltip="tutoriel">
                <div id="tutoriel" >!</div></button>
        </div>
        <a href="index.php"><div class="logo" data-tooltip="homepage">
        </div></a>
        <div></div>
        <div class="right-align">
            <a href="apropos.html"><div class="apropos" data-tooltip="à propos">
            </div></a>
            <a href="inscription.php"><div class="connexion" data-tooltip="connexion">
            </div></a>
        </div>
    </div>
</header>



    <!-- Fin header -->
     <div id="barres-recherche">
        <div class="language-selector">
                <select id="language-select" onchange="changeLanguage()">
                    <option value="" class="accent">Tu cherches une langue ? </option>
                    <option value="es"><a href="accentesp.html" class="accent" data-lang="es"></a>Espagnol</option>
                    <option value="fr"><a href="accentfr.html" class="accent" data-lang="fr">Français</a></option>
                    <option value="it"><a href="accentita.html" class="accent" data-lang="it"></a>Italien</option>
                    <option value="pt"><a href="accentpt.html" class="accent" data-lang="pt"></a>Portugais</option>
                </select>
        </div>
        <div class="search-container">
            <input type="text" id="search" placeholder="Tu cherches une ville ?" list="search-options">
            <datalist id="search-options">       
                <!-- Canada -->
                <option value="Montréal"></option>             
                <!-- France -->
                <option value="Cayenne"></option>
                <option value="Fort-de-France"></option>
                <option value="Grenoble"></option>
                <option value="Marseille"></option>
                <option value="Paris"></option>
                <option value="Toulouse"></option>     
                <!-- Brésil -->
                <option value="Curitiba"></option>
                <option value="Florianópolis"></option>
                <option value="Fortaleza"></option>
                <option value="São Paulo"></option>
                <!-- Italie -->
                <option value="Messine"></option>
                <option value="Rome"></option>
                <option value="Venise"></option>
                <!-- Argentine -->
                <option value="Buenos Aires"></option>  
                <!-- Colombie -->
                <option value="Bogotá"></option>     
                <!-- Espagne -->
                <option value="Madrid"></option>
                <!-- Venezuela -->
                <option value="Caracas"></option>
            </datalist>
        </div>
    </div>
        <div id="map"></div>
    </main>
    <br>
    <!-- Lien vers l'API Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAHEI3GgF66F2QIfcXxQp9Eugqaysym5k&callback=initMap" async defer></script>
    <!-- Lien vers le fichier JavaScript -->
    <script src="scripts.js"></script>
</body>
</html>
