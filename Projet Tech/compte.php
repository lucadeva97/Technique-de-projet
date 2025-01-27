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
    $status = $_SESSION['status'];
    $niveau = $_SESSION['niveau'];
    $mdp = $_SESSION['mdp'];

?>
    
    <label>Nom: <?php echo "$nom"; ?> <br> </label> 
    <label>Email: <?php echo "$email"; ?> </label>
    <label>Ton statut: <?php echo "$status"; ?> </label>
    <?php
    if ($status == apprenant) {
    echo "Ton niveau: $niveau";
    } else { 
    echo "T'es un professeur";
    }
    ?>

    
</body>
</html>
