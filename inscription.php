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
        $password = password_hash(htmlspecialchars($_POST['password']), PASSWORD_BCRYPT);
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $niveau = htmlspecialchars($_POST['niveau']);

        // Vérifier si l'email existe déjà
        $stmt = $pdo->prepare("SELECT * FROM login1 WHERE nom = ?");
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
        $stmt->bindParam(':mdp', $mdp);
        $stmt->bindParam(':statu', $statu);       
        $stmt->bindParam(':niveau', $niveau);
        $stmt->execute();

        // Stocker les données dans la session
        $_SESSION['nom'] = $nom;
        $_SESSION['prenom'] = $prenom;
        $_SESSION['email'] = $email;
        $_SESSION['mdp'] = $mdp;
        $_SESSION['statu'] = $statu;
        $_SESSION['niveau'] = $niveau;

        // Rediriger vers la page de compte
        header('Location: compte.php');
        exit();
    } catch (PDOException $e) {
        die("Erreur lors de l'inscription : " . $e->getMessage());
    }
}
?>