<?php include "includes/header.html" ?>
<style>


  </style>
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

  <!-- Header -->

  <!-- Grid -->
 <div class="w3-row">
   
    <div class="w3-col l3">
    <div class="w3-card w3-margin w3-margin-top">
          
        <div class="w3-container w3-white">
          <h3 style="text-align: center;color:steelblue; "><b><i class="bi bi-calendar-check"></i> Dates Importantes</b></h3>
          <hr>
          
            <p><a style="text-align: center;color:firebrick;text-decoration:none;" href="Projet/project.php"> <i class="bi bi-download"></i> Rendu du projet: 20 Mai 2022 à 23h59</a></p>
            <p><a style="text-align: center;text-decoration:none;" href="Examen/Sujet.php"><i class="bi bi-pencil-square"></i> Examen: 23 Mai 2022</a></p>
          
        </div>
      </div>

      <div class="w3-card w3-margin w3-margin-top">
        <div class="w3-container w3-white">
          <h3 style="text-align: center;color:steelblue;"><b><a style="text-decoration:none;" href="https://moodle.bordeaux-inp.fr/course/view.php?id=1003"><i class="bi bi-diagram-3"></i>  Plan du cours</b></a></h3>
          <h5>1. Introduction</h5>
          <ul>
            <li>Internet</li>
            <li>Le Web</li>
            <li>Les styles d'applications Web</li>
          </ul>
          <h5>2. HTML</h5>
          <ul>
            <li>Présentation du langage</li>
            <li>Document, éléments et attributs</li>
            <li>Squelette d'un document</li>
            <li>Les différentes catégories d'éléments</li>
          </ul>
          <h5>3. CSS</h5>
          <ul>
            <li>Présentation du langage</li>
            <li>Règles, sélecteurs, blocs et déclarations</li>
            <li>Héritage et priorités</li>
            <li>Positionnement</li>
            <li>Le modèle de boîtes</li>
            <li>Déclarations usuelles</li>
          </ul>
          <h5>4. PHP</h5>
          <ul>
            <li>Présentation du langage</li>
            <li>Générer du HTML</li>
            <li>Accéder au contenu des requêtes HTTP</li>
            <li>Les sessions applicatives</li>
          </ul>
          <h5>5. SQL</h5>
          <ul>
            <li>Présentation des SGBDR</li>
            <li>Le modèle entité-relations</li>
            <li>Création de la structure de la base</li>
            <li>Manipulation des données</li>
            <li>Intégration avec PHP</li>
        </div>
      </div>
      <hr>
    </div>
    <!-- Blog entries -->
    <div class="w3-col l8 s12">
      <!-- Blog entry -->
      <div class="w3-card-4 w3-margin w3-white">
        <a href="articles/article_css.php"><img src="banner-html.png" alt="Nature" width="100%"></a>
      </div>
      <hr>

      <!-- Blog entry -->
      <div class="w3-card-4 w3-margin w3-white">
        <a href="articles/article_php.php"><img src="banner-php.png" alt="Nature" width="100%"></a>

      </div>
      <hr>
      <!-- Blog entry -->
      <div class="w3-card-4 w3-margin w3-white">
        <a href="articles/article_sql.php"><img src="banner-sql.png" alt="Nature" width="100%"></a>

      </div>
      <hr>
      <!-- END BLOG ENTRIES -->
    </div>

    <!-- Introduction menu -->


    <!-- END GRID -->
  </div><br>

  <!-- END w3-content -->
</div>

<!-- Footer -->
<?php include "includes/footer.html" ?>