<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/form.css">
</head>
<body>

<?php include("includes/menu.php"); ?>

<?
// Get my posts
include "includes/connexion.php"; // Inclure le fichier
$conn = connect(); // On se connecte à la base de données
$login = $_SESSION['login'];
$sql = "SELECT * FROM `new_post` WHERE `Auteur` = '$login' ORDER BY date DESC " ;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo '<div class="card">';
        echo '<h2>' . $row['Titre'] . '</h2>';
        echo '<h5>Auteur: ' . $row['Auteur'] . '</h5>';
        echo '<h6>Date: ' . $row['Date'] . '</h6>';
        echo '<p>' . $row['Contenu'] . '</p>';
        echo '</div>';
    }
} else {
    echo "<div class='w3-card-4 w3-margin w3-white w3-center'>";
    echo "Pas encore d'articles écrit !";
    echo "<br>";
    echo "En écrire un : <a href='admin.php'>Nouvel article</a>";
    echo "</div>";
}

?>
</body>
</html>