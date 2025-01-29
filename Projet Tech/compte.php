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
            <div class="language-selector">
                <select id="language-select" onchange="changeLanguage()">
                    <option value="">Sélectionnez une langue</option>
                    <option value="es">Espagnol</option>
                    <option value="fr">Français</option>
                    <option value="it">Italien</option>
                    <option value="pt">Portugais</option>
                </select>
            </div>
        </div>
        
        <a href="index.html"><div class="logo" data-tooltip="homepage"></a>
        </div>

        <div></div>

        <div class="right-align">
            <a href="apropos.html"><div class="apropos" data-tooltip="à propos"></a>
            </div>
            <a href="inscription.php"><div class="connexion" data-tooltip="connexion"></a>
            </div>
        </div>

    </div>
</header>
    
    
    <?php
session_start();

if (isset($_SESSION['nom']) && isset($_SESSION['email']) && isset($_SESSION['prenom']) 
    && isset($_SESSION['password']) && isset($_SESSION['categorie']) && isset($_SESSION['niveau'])) {
    $nom = $_SESSION['nom'];
    $email = $_SESSION['email'];
    $prenom = $_SESSION['prenom'];
    $status = $_SESSION['status'];
    $niveau = $_SESSION['niveau'];
    $mdp = $_SESSION['mdp'];

?>
    
    <label>Nom: <?php echo "$nom"; ?> <br> </label> 
    <label>Email: <?php echo "$email"; ?> </label>
    <label>Ton statut: <?php echo "$status"; ?> </label>
    <?php
    if ($status == "apprenant") {
    echo "Ton niveau: $niveau";
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
