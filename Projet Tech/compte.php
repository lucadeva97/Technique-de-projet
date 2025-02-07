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

// Redirect to login page if session variables are not set
if (!isset($_SESSION['nom']) || !isset($_SESSION['email']) || 
!isset($_SESSION['prenom']) || !isset($_SESSION['niveau']) || 
!isset($_SESSION['statu'])) { 
    header('Location: connexion.php');
    exit();
} else {
    echo "Your profile";
}

// Access session variables
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$email = $_SESSION['email'];
$statu = $_SESSION['statu'];
$niveau = $_SESSION['niveau'];

// Remove sensitive data from session
unset($_SESSION['password']); // Ensure password is not accessible here

?>

<div class="container">
    <h1>Bienvenue sur votre compte</h1>
    
    <div class="profile-info">
        <p><b>Nom:</b> <?php echo htmlspecialchars($nom); ?></p>
        <p><b>Email:</b> <?php echo htmlspecialchars($email); ?></p>

    </div>

    <div class="logout-button">
        <a href="logout.php">Se déconnecter</a>
    </div>
</div>

</body>
</html>
