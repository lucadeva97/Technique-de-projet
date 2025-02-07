<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    
<body>

<?php
session_start();

// Redirect to login page if session variables are not set
if (!isset($_SESSION['nom']) || !isset($_SESSION['email']) || !isset($_SESSION['prenom'])) {
    header('Location: connexion.php');
    exit();
} else {
    echo "Your profile";
}

// Access session variables
$nom = $_SESSION['nom'];
$prenom = $_SESSION['prenom'];
$email = $_SESSION['email'];

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
