<?php
session_start();


if (isset($_SESSION['nom']) && isset($_SESSION['email']) && 
isset($_SESSION['prenom']) && isset($_SESSION['niveau']) && 
isset($_SESSION['statu'])) {
    header('Location: compte.php'); 
    exit();
} else {

$inscription_reussie = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connexion à la base de données avec gestion des erreurs
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=dasilva', 'dasilva', '&dasilva;');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }

    try {
        $email = htmlspecialchars($_POST['email']);
        $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_BCRYPT);
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $niveau = htmlspecialchars($_POST['niveau']);
        $statu = htmlspecialchars($_POST['categorie']); // Ajout de la catégorie

        // Vérifier si l'email existe déjà
        $stmt = $pdo->prepare("SELECT * FROM login1 WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->rowCount() > 0) {
            die("Erreur : L'email existe déjà.");
        }

        // Insérer les données dans la table
        $sql = "INSERT INTO login1 (nom, prenom, email, mdp, statu, niveau) VALUES (:nom, :prenom, :email, :mdp, :statu, :niveau)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':mdp', $password); // Utilisation de $password au lieu de $mdp
        $stmt->bindParam(':statu', $statu);       
        $stmt->bindParam(':niveau', $niveau);
        $stmt->execute();

        // Stocker les données dans la session
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['email'] = $email;
        $_SESSION['mdp'] = $password; // Utilisation de $password au lieu de $mdp
        $_SESSION['statu'] = $statu;
        $_SESSION['niveau'] = $niveau;

        // Indiquer que l'inscription a réussi
        $inscription_reussie = true;
    } catch (PDOException $e) {
        die("Erreur lors de l'inscription : " . $e->getMessage());
    }
}
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
        <a href="../index.php"><div class="logo" data-tooltip="homepage"></div></a>
        <div></div>
        <div class="right-align">
            <a href="../apropos.php"><div class="apropos" data-tooltip="à propos"></div></a>
            <a href="connexion.php"><div class="connexion" data-tooltip="connexion"></div></a>
        </div>
    </div>
</header>
<body>
    <div class="form-container" id="signup-form" style="display:block;">  
        <h2>Inscription</h2>
        <form id="signup-form" action="inscription.php" method="POST" onsubmit="return validatePasswords()">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirmer ton mot de passe :</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="prof">Tu es :</label>
            <select id="prof" name="categorie" required>
                <option value="prof">Professeur de langues</option>
                <option value="apprenant">Apprenant</option>
            </select>

            <label for="niveau">Si tu es apprenant, précise ton niveau :</label>
            <select id="niveau" name="niveau" required>
                <option value="A1">A1</option>
                <option value="A2">A2</option>
                <option value="B1">B1</option>
                <option value="B2">B2</option>
                <option value="C1">C1</option>
                <option value="C2">C2</option>
            </select>
            <br>
            <button type="submit">Je m'inscris</button>
        </form>
    <br>
    <div class="already-account">
        <a href="connexion.php"><button>J'ai déjà un compte</button></a>
    </div>      
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

        function validatePasswords() {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirm-password').value;
            if (password !== confirmPassword) {
                alert("Les mots de passe ne correspondent pas.");
                return false;
            }
            return true;
        }

        function changeLanguage() {
            const select = document.getElementById('language-select');
            const selectedOption = select.options[select.selectedIndex];
            const url = selectedOption.getAttribute('data-url');
            if (url) {
                window.location.href = url;
            }
        }

        <?php if ($inscription_reussie): ?>
        alert("Inscription réussie !");
        window.location.href = "connexion.php";
        <?php endif; ?>
    </script>
</body>
</html>
