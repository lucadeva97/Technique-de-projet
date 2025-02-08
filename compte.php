<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variações do português</title>
    <link rel="stylesheet" href="sty.css">
    <link rel="icon" href="minilogo.png" type="image/png">
</head>
<header>
    <div class="header-container">
        <div class="left-align">
            <div class="language-selector">
                <select id="language-select" onchange="changeLanguage()">
                    <option value="">Tu cherches une langue ? </option>
                    <option value="es"><a href="accentesp.html" class="accent" data-lang="es"></a>Espagnol</option>
                    <option value="fr"><a href="accentfr.html" class="accent" data-lang="fr">Français</a></option>
                    <option value="it"><a href="accentita.html" class="accent" data-lang="it"></a>Italien</option>
                    <option value="pt"><a href="accentpt.html" class="accent" data-lang="pt"></a>Portugais</option>
                </select>
            </div>
        </div>
        <a href="index.html"><div class="logo" data-tooltip="homepage">
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
<body> 
    <?php
    session_start();

    if (isset($_SESSION['nom']) && isset($_SESSION['email']) && isset($_SESSION['prenom']) 
        && isset($_SESSION['status']) && isset($_SESSION['niveau']) && isset($_SESSION['mdp'])) {
        $nom = $_SESSION['nom'];
        $email = $_SESSION['email'];
        $prenom = $_SESSION['prenom'];
        $status = $_SESSION['statu'];
        $niveau = $_SESSION['niveau'];
        $mdp = $_SESSION['mdp'];
    ?>

    <label>Nom: <?php echo htmlspecialchars($nom); ?> <br> </label> 
    <label>Email: <?php echo htmlspecialchars($email); ?> </label>
    <label>Ton statut: <?php echo htmlspecialchars($status); ?> </label>
    <?php
        if ($status == 'apprenant') {
            echo "Ton niveau: " . htmlspecialchars($niveau);
        } else { 
            echo "T'es un professeur";
        }
    ?>

    <?php
    } else {
        // Si les variables de session ne sont pas définies, afficher un message d'erreur
        echo "Les informations de session ne sont pas définies.";
    }
    ?>

</body>
</html>