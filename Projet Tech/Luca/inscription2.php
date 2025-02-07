<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="sty.css">
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
        <a href="index.html" class="logo-container"><img src="logo.png" width="300px" alt="Logo"></a>
        <div class="right-align">
            <a class="nous" href="apropos.html"><img src="about.png" width="70" height="50"></a>
            <a class="minilogo" href="inscription.html"><img src="login.png" width="50" height="50"></a>
        </div>
    </div>
</header>

    <?php
session_start(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['nom'] = $_POST['nom']; 
    $_SESSION['prenom'] = $_POST['prenom']; 
    $_SESSION['email'] = $_POST['email']; 
    $_SESSION['password'] = $_POST['password'];
    header('Location: compte.php'); 
    exit();
}
?>
    
<body>
    <div class="form-container" id="signup-form" style="display:block;">
        <h2>Inscription</h2>
        <form action="connexion.php" method="post">
            <input type="hidden" name="action" value="register">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <button type="submit">Je m'inscris</button>
        </form>
    </div>
    <div class="form-container" id="login-form" style="display:block;">
        <h2>Connexion</h2>
        <form method="post" action="connexion.php">
            <input type="hidden" name="action" value="login">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Connexion</button>
        </form>
    </div>
    <script>
        function checkNomOnFocus() {
            var nom = document.getElementById('nom').value;
            if (nom === '') {
                alert("N’oubliez pas de renseigner le champ nom");
            }
        }

        function checkPrenomOnBlur() {
            var prenom = document.getElementById('prenom').value;
            if (prenom === '') {
                alert("N’oubliez pas de renseigner le champ prénom");
            }
        }
    </script>
</body>
</html>
