<?php
session_start();

// Redirect to login page if session variables are not set
if (!isset($_SESSION['nom']) || !isset($_SESSION['email']) || 
!isset($_SESSION['prenom']) || !isset($_SESSION['niveau']) || 
!isset($_SESSION['statu'])) { 
    header('Location: inscription.php');
    exit();
} else {
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


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte</title>
    <link rel="stylesheet" href="../sty.css">
    <link rel="icon" href="minilogo.png" type="image/png">
</head>


<header>
<div class="header-container">
        <div class="left-align">
            <div class="language-selector">
                <select id="language-select" onchange="changeLanguage()">
                    <option value="" class="accent">Tu cherches une langue ? </option>
                    <option value="es" disabled style="color: grey;">Espagnol</option>
                    <option value="fr" data-url="../accentfr.php">Français</option>
                    <option value="it" disabled style="color: grey;">Italien</option>
                    <option value="pt" disabled style="color: grey;">Portugais</option>
                </select>
            </div>
        </div>
        <a href="../index.php"><div class="logo" data-tooltip="homepage">
        </div></a>
        <div></div>
        <div class="right-align">
            <a href="../apropos.php"><div class="apropos" data-tooltip="à propos">
            </div></a>
            <a href="inscription.php"><div class="connexion" data-tooltip="connexion">
            </div></a>
        </div>
    </div>
</header>


<body>

<div class="container-compte">
    <div class="profile-info form-container">

    <h1>Bienvenue sur ton compte !</h1>
    <br>
        <p><b>Nom :</b> <?php echo htmlspecialchars($nom); ?></p><br>
        <p><b>Prénom :</b> <?php echo htmlspecialchars($prenom); ?></p><br>
        <p><b>Email :</b> <?php echo htmlspecialchars($email); ?></p><br>
        <p><b>Ton niveau :</b> <?php echo htmlspecialchars($niveau); ?></p><br>
        <p><b>Ton statut :</b> <?php echo htmlspecialchars($statu); ?></p><br>
        <p><b>Change la langue du site :</b><p><br>
        <select id="language-select">
                    <option value="fr" class="accent">Français</option>
                    <option value="es" disabled style="color: grey;">Español</option>
                    <option value="it" disabled style="color: grey;">Italiano</option>
                    <option value="pt" disabled style="color: grey;">Português</option>
                </select>
                <br>
    <form method="POST" action="compte.php">
        <button type="submit" name="logout" class="logout-button">Disconnection</button>
    </form>
    </div>

</div>
<script>
    function changeLanguage() {
        const select = document.getElementById('language-select');
        const selectedOption = select.options[select.selectedIndex];
        const url = selectedOption.getAttribute('data-url');
        if (url) {
            window.location.href = url;
        }
    }
</script>

<?php
if (isset($_POST['logout'])) {
    // Destroy the session and logout the user
    session_unset();  // Unset all session variables
    session_destroy();  // Destroy the session

    // Redirect to the connexion page after logout
    header("Location: connexion.php");
    exit();  // Make sure the script stops executing
}
?>

</body>
</html>









