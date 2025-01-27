<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    
    <?php
session_start();

if (isset($_SESSION['nom']) && isset($_SESSION['email']) && isset($_SESSION['prenom']) 
    && isset($_SESSION['password']) && isset($_SESSION['categorie']) && isset($_SESSION['niveau'])) {
    $nom = $_SESSION['nom'];
    $email = $_SESSION['email'];
    $prenom = $_SESSION['prenom'];
    $categorie = $_SESSION['categorie'];
    $niveau = $_SESSION['niveau'];
    $password = $_SESSION['password'];

?>
    
    <label>Nom: <?php echo "$nom"; ?> <br> </label> 
    <label>Email: <?php echo "$email"; ?> </label>
    <label>Ton statut: <?php echo "$categorie"; ?> </label>
    <?php
    if ($categorie == apprenant) {
    echo "Ton niveau: "$niveau"; ?>
    <button>Changer le mot de passe</button>

    
</body>
</html>
