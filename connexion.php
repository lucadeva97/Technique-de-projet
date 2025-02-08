<?php
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
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $niveau = htmlspecialchars($_POST['niveau']);

        // Vérifier si l'email existe déjà
        $stmt = $pdo->prepare("SELECT * FROM login1 WHERE identifiant = ?");
        $stmt->execute([$email]);

        if ($stmt->rowCount() > 0) {
            echo "Cet email est déjà enregistré.";
        } else {
            // Hacher le mot de passe
            $password_hashed = password_hash($password, PASSWORD_DEFAULT);

            // Insérer dans la base de données
            $stmt = $pdo->prepare("INSERT INTO login1 (identifiant, pwd, nom, prenom, niveau, statu) 
            VALUES (?, ?, ?, ?, ?, ?)");
            if ($stmt->execute([$email, $password_hashed, $nom, $prenom, $niveau])) {
                // Afficher un message de succès et rediriger vers la page de connexion
                echo "<script>
                        alert('Inscription réussie ! Veuillez entrer vos identifiants.');
                        window.location.href = 'connexion.php';
                      </script>";
                exit();
            } else {
                echo "Une erreur est survenue.";
            }
        }
    } catch (PDOException $e) {
        die("Erreur lors de l'inscription : " . $e->getMessage());
    }
} else {
    echo "Accès non autorisé.";
}
?>
