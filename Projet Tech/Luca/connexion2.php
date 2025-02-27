<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Connexion à la base de données avec gestion des erreurs
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=devalerio', 'devalerio', '&devalerio;');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }

    $action = $_POST['action'];  // Get action (login or register)

    if ($action == 'register') {
        // Registration process
        try {
            $email = htmlspecialchars($_POST['email']);
            $mdp = htmlspecialchars($_POST['password']);
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);

            // Vérifier si l'email existe déjà
            $stmt = $pdo->prepare("SELECT * FROM Projet WHERE email = ?");
            $stmt->execute([$email]);

            if ($stmt->rowCount() > 0) {
                echo "Cet email est déjà enregistré.";
            } else {
                // Hacher le mot de passe
                $password_hashed = password_hash($mdp, PASSWORD_DEFAULT);  // Corrected variable

                // Insérer dans la base de données
                $stmt = $pdo->prepare("INSERT INTO Projet (email, mdp, nom, prenom) 
                VALUES (?, ?, ?, ?)");
                if ($stmt->execute([$email, $password_hashed, $nom, $prenom])) {
                    $_SESSION['nom'] = $nom;
                    $_SESSION['prenom'] = $prenom;
                    $_SESSION['email'] = $email;
                    // Afficher un message de succès et rediriger vers la page de connexion
                    echo "<script>
                            alert('Inscription réussie ! Vous êtes maintenant connecté.');
                            window.location.href = 'compte.php';
                          </script>";
                    exit();
                } else {
                    echo "Une erreur est survenue.";
                }
            }
        } catch (PDOException $e) {
            die("Erreur lors de l'inscription : " . $e->getMessage());
        }
    } elseif ($action == 'login') {
        // Login process
        try {
            $email = htmlspecialchars($_POST['email']);
            $mdp = htmlspecialchars($_POST['password']);

            // Vérifier si l'email existe
            $stmt = $pdo->prepare("SELECT * FROM Projet WHERE email = ?");
            $stmt->execute([$email]);

            if ($stmt->rowCount() > 0) {
                $user = $stmt->fetch(PDO::FETCH_ASSOC);

                // Vérifier le mot de passe
                if (password_verify($mdp, $user['mdp'])) {
                    // Démarrer une session et rediriger vers la page du compte
                     // Assuming there's an ID column
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['nom'] = $user['nom'];
                    $_SESSION['prenom'] = $user['prenom'];

                    // Rediriger vers la page de compte
                    header('Location: compte.php');
                    exit();
                } else {
                    echo "Mot de passe incorrect.";
                }
            } else {
                echo "Aucun utilisateur trouvé avec cet email.";
            }
        } catch (PDOException $e) {
            die("Erreur lors de la connexion : " . $e->getMessage());
        }
    }
} else {
    echo "Accès non autorisé.";
}
?>
