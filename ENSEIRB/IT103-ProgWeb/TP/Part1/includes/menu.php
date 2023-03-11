<div class="navbar">
<?php 
session_start();
if(isset($_SESSION["islog"]) && $_SESSION["islog"] == true){
    echo "<a href='index.php'>Bonjour ". $_SESSION["login"]. "</a>";
}
else {
    echo "<a href='index.php'>Bonjour Inconnu !</a>";
}
?>

  <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Accueil</a>
  <?php
    if(isset($_SESSION["islog"]) && $_SESSION["islog"] == true){
        echo "  <a href='deconnect.php'><i class='fa fa-fw fa-user'></i> Deconnexion</a>";
    }
    else {
        echo "  <a href='connect.php'><i class='fa fa-fw fa-user'></i> Connexion</a>";
    }
  ?>
  <a href="inscription.php"><i class="fa fa-fw fa-envelope"></i> Inscription</a>

</div>