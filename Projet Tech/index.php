<?php
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cartophonie</title>
    <link rel="stylesheet" href="sty.css">
    <link rel="icon" href="minilogo.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add meta tags for better mobile responsiveness -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="mobile-web-app-capable" content="yes">
</head>
<header>
    <div class="header-container">
        <div class="left-align">
            <button id="tutoriel-tooltip" data-tooltip="tutoriel" onclick="showImage()">
                <div id="tutoriel" >!</div></button>
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
<body>
        <div id="barres-recherche">
        <div class="language-selector">
            <select id="language-select" onchange="changeLanguage()">
                <option value="" class="accent">Tu cherches une langue ? </option>
                <option value="es" disabled style="color: grey;">Espagnol</option>
                <option value="fr" data-url="accentfr.php">Français</option>
                <option value="it" disabled style="color: grey;">Italien</option>
                <option value="pt" disabled style="color: grey;">Portugais</option>
            </select>
        </div>
        <div class="search-container">
            <input type="text" id="search" placeholder="Tu cherches une ville ?" list="search-options">
            <datalist id="search-options">
                 <!-- Argentine -->
                 <option value="Argentine" disabled hidden></option>
                 <option value="Buenos Aires"></option>                
                <!-- Brésil -->
                <option value="Brésil" disabled hidden></option>
                <option value="Curitiba"></option>
                <option value="Florianópolis"></option>
                <option value="Fortaleza"></option>
                <option value="São Paulo"></option>
                <option value="Santa Bárbara do Sul"></option>
                <!-- Espagne -->
                <option value="Espagne" disabled hidden></option>
                <option value="Madrid"></option>
                <!-- Canada -->
                <option value="Canada" disabled hidden></option>
                <option value="Montréal"></option>
                <!-- Colombie -->
                <option value="Colombie" disabled hidden></option>
                <option value="Bogotá"></option>                
                <!-- France -->
                <option value="France" disabled hidden></option>
                <option value="Cayenne"></option>
                <option value="Fort-de-France"></option>
                <option value="Grenoble"></option>
                <option value="Marseille"></option>
                <option value="Paris"></option>
                <option value="Toulouse"></option>
                <!-- Italie -->
                <option value="Italie" disabled hidden></option>
                <option value="Messine"></option>
                <option value="Rome"></option>
                <option value="Venise"></option>
                <!-- Venezuela -->
                <option value="Venezuela" disabled hidden></option>
                <option value="Caracas"></option>
            </datalist>
        </div>
    </div>
    <div id="map" style="width: 100%; height: 100vh;"></div>
    <br>
    <!-- Lien vers l'API Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAHEI3GgF66F2QIfcXxQp9Eugqaysym5k&callback=initMap" async defer></script>
    <!-- Lien vers le fichier JavaScript -->
    <script src="scripts.js"></script>
    <!-- Ensure JavaScript compatibility with different browsers -->
    <script>
        function showImage() {
            const img1 = document.createElement('img');
            img1.src = 'images/tuto1.png'; // Change to the path of your first image
            img1.style.position = 'fixed';
            img1.style.top = '10px';
            img1.style.left = '70%';
            img1.style.transform = 'translateX(-50%)';
            img1.style.zIndex = '1000';
            img1.classList.add('hover-effect');
            document.body.appendChild(img1);

            img1.addEventListener('click', () => {
                const img2 = document.createElement('img');
                img2.src = 'images/tuto2.png'; // Change to the path of your second image
                img2.style.position = 'fixed';
                img2.style.top = '100px';
                img2.style.left = '220px'; // Adjust the position as needed
                img2.style.zIndex = '1000';
                img2.classList.add('hover-effect');
                document.body.appendChild(img2);

                document.body.removeChild(img1);

                img2.addEventListener('click', () => {
                    const img3 = document.createElement('img');
                    img3.src = 'images/tuto3.png'; // Change to the path of your third image
                    img3.style.position = 'fixed';
                    img3.style.top = '100px';
                    img3.style.right = '220px'; // Adjust the position as needed
                    img3.style.zIndex = '1000';
                    img3.classList.add('hover-effect');
                    document.body.appendChild(img3);

                    document.body.removeChild(img2);

                    img3.addEventListener('click', () => {
                        const img4 = document.createElement('img');
                        img4.src = 'images/tuto4.png'; // Change to the path of your fourth image
                        img4.style.position = 'fixed';
                        img4.style.top = '250px';
                        img4.style.right = '390px'; // Adjust the position as needed
                        img4.style.zIndex = '1000';
                        img4.classList.add('hover-effect');
                        document.body.appendChild(img4);

                        document.body.removeChild(img3);

                        img4.addEventListener('click', () => {
                            document.body.removeChild(img4);
                        });
                    });
                });
            });
        }

        function changeLanguage() {
            const select = document.getElementById('language-select');
            const selectedOption = select.options[select.selectedIndex];
            const url = selectedOption.getAttribute('data-url');
            if (url) {
                window.location.href = url;
            }
        }

        document.addEventListener('DOMContentLoaded', function() {
            if (typeof initMap === 'function') {
                initMap();
            }
        });
    </script>
</body>
</html>
