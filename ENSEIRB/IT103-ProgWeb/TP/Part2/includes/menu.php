<div class="navbar">
<?php 
session_start();

if(isset($_SESSION["islog"]) && $_SESSION["islog"] == true){
  ?>
<div class="dropdown active">

  <button class="dropbtn"><i class="fa fa-fw fa-home"></i> <?php echo $_SESSION["login"]; ?>
    
  </button>
  <div class="dropdown-content">
    <a href="admin.php">Créer un article</a>
    <a href="myposts.php">Mes articles </a>
    <a href="deconnect.php">Déconnexion</a>
  </div>
</div>
<a  href="index.php"><i class="fa fa-fw fa-home"></i> Accueil</a> 
<?php }
else {
  ?> <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Accueil</a><?php
}
?>

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