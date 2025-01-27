<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="sty.css">
</head>
    
    <?php
session_start(); 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['nome'] = $_POST['nome']; 
    header('Location: compte.php'); 
    exit();
}
?>
    
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
<body>
    <div class="form-container" id="signup-form" style="display:block;">
        <h2>Inscription</h2>
        <form action="connexion.php" method="POST">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="prof">Je suis :</label>
            <select id="prof" name="catégorie" required>
                <option value="prof">Professeur de langues</option>
                <option value="apprenant">Apprenant</option>
            </select>

            <label for="niveau">Si vous êtes apprenant, précisez votre niveau :</label>
            <select id="niveau" name="niveau" required>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="C1">C1</option>
                <option value="C2">C2</option>
            </select>

            <button type="submit">Je m'inscris</button>
        </form>
    </div>
    <div class="form-container" id="login-form" style="display:block;">
        <h2>Connexion</h2>
        <form method="post" action="connexion.php">
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
