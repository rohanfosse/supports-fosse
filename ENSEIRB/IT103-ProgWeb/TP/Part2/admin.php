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

<div class="header">
  <h2>Blog Name</h2>
</div>

<?php include("includes/menu.php"); ?>

<form action="admin.php" method="post">
     <label for="title">Titre:</label>
     <input type="text" name="title">
     <label for="content">Contenu:</label><br>
     <textarea name="content" rows="10" cols="150"></textarea>
     <input type="submit" name="submit">
 </form>
 <?php 
 // Add form in the database
    if(isset($_POST["submit"])){
        include "includes/connexion.php"; // Inclure le fichier
        $conn = connect(); // On se connecte à la base de données
        
        $author = $_SESSION['login'];

        $title = $_POST["title"];

        $content = $_POST["content"];
        $sql = "INSERT INTO `new_post` (`Titre`, `Auteur`, `Contenu`, `Date`) VALUES ('$title','$author' , '$content', NOW())";
    
        $result = $conn->query($sql);// On lance la requête
        if ($result) { 
            ?>
            <div class="w3-panel w3-green w3-display-container w3-round">
    <span onclick="this.parentElement.style.display='none'"
    class="w3-button w3-large w3-display-topright ">&times;</span>
    <h3>Success!</h3>
    <?php echo "Votre article a bien été ajouté !"; }}?>

