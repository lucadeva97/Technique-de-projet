<?php
session_start();

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
        $password = htmlspecialchars($_POST['password']);

        // Vérifier si l'email existe
        $stmt = $pdo->prepare("SELECT * FROM login1 WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $password_hashed = $user['mdp'];

            // Vérifier le mot de passe
            if (password_verify($password, $password_hashed)) {
                // Stocker les données utilisateur dans la session
                $_SESSION['nom'] = $user['nom'];
                $_SESSION['prenom'] = $user['prenom'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['statu'] = $user['statu'];
                $_SESSION['niveau'] = $user['niveau'];

                echo 'inscription reussie';
                // Rediriger vers la page d'accueil
                header('Location: ../index.html');
                exit();
            } else {
                echo "Mot de passe incorrect.";
            }
        } else {
            echo "Cet email n'existe pas.";
        }
    } catch (PDOException $e) {
        // Afficher l'erreur exacte
        echo "Erreur : " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="../sty.css">
    <link rel="icon" href="minilogo.png" type="image/png">
</head>
<body>
<header>
<div class="header-container">
        <div class="left-align">
            <div class="language-selector">
                <select id="language-select" onchange="changeLanguage()">
                    <option value="" class="accent">Tu cherches une langue ? </option>
                    <option value="es" disabled style="color: grey;">Espagnol</option>
                    <option value="fr" data-url="../accentfr.html">Français</option>
                    <option value="it" disabled style="color: grey;">Italien</option>
                    <option value="pt" disabled style="color: grey;">Portugais</option>
                </select>
            </div>
        </div>
        <a href="../index.html"><div class="logo" data-tooltip="homepage"></div></a>
        <div></div>
        <div class="right-align">
            <a href="../apropos.html"><div class="apropos" data-tooltip="à propos"></div></a>
            <a href="inscription.php"><div class="connexion" data-tooltip="connexion"></div></a>
        </div>
    </div>
</header>
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
    function changeLanguage() {
        const select = document.getElementById('language-select');
        const selectedOption = select.options[select.selectedIndex];
        const url = selectedOption.getAttribute('data-url');
        if (url) {
            window.location.href = url;
        }
    }
</script>
</body>
</html>
