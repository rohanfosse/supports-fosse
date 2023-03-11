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

<?php if(isset($_SESSION["inscription"])) { ?>
    <div class="w3-panel w3-pale-green w3-display-container w3-round">
                <span onclick="this.parentElement.style.display='none'"
                class="w3-button w3-large w3-display-topright ">&times;</span>
                <h3>Success!</h3>
                <?php echo "Vous avez été enregistré avec succès." ?>
              </div>

<?php
        unset($_SESSION["inscription"]);
         } ?>

<form action="<?php $_PHP_SELF ?>" method="post">
        <label for="login">Entrez votre pseudo:</label>
        <input type="text" name="login">
        <label for="password">Entrez votre mot de passe:</label>
        <input type="password" name="password">
        <input type="submit" name="submit">
    </form>
    <?php
        if(isset($_POST["submit"]) && !isset($_SESSION["inscription"])){
            include "includes/connexion.php"; // Inclure le fichier
            $conn = connect(); // On se connecte à la base de données
            $login = $_POST["login"];
            $password = $_POST["password"];
            $sql = "INSERT INTO `contact_exemple` (`LOGIN`,`PASSWORD`)
             VALUES ('$login','$password')";
            $result = $conn->query($sql);// On lance la requête
            if ($result === TRUE) { 
                $_SESSION["inscription"] = true;
            } else {
                ?>
                <div class="w3-panel w3-red w3-display-container w3-round">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright ">&times;</span>
  <h3>Error!</h3>
  <?php echo "Error: " . $sql . "<br>" . $conn->error; ?>
</div>
                <?php
                
            }
        }
    ?>

</body>
</html>