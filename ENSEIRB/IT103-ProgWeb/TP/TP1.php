<? session_start();
 include "../includes/header_article.php" ?>

<hr>


<div class="w3-row ">
    <div class="w3-col w3-container " style="width:20%"></div>
        <div class="w3-col" style="width:60%">
            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-white">

                <div id="title"  class="w3-container">
                    <h1 style="text-align: center;">TP1 - Blog avec base de données </h1>
                </div>
            </div>
        </div>
</div>


<div class="w3-row ">
            <div class="w3-col w3-container " style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
  
                    <div class="w3-container">
                        <h2 style="text-align: center;">Squelette du blog</h2>
Si nécessaire ou si vous souhaitez repartir sur des bases saines, vous pouvez trouver ci-dessous un exemple de code HTML et CSS
du blog que vous pouvez récupérer.
<br/>
<hr>
<span class="w3-tag">HTML</span> <span class="w3-tag" style="background-color: #a19f9f">index.html</span><br/>
<details>
    <summary id="sumhtml">Code HTML</summary>
    <pre class="prettyprint linenums">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="utf-8"&gt;
&lt;link rel="stylesheet" href="style.css"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;div class="header"&gt;
  &lt;h2&gt;Blog Name&lt;/h2&gt;
&lt;/div&gt;

&lt;div class="row"&gt;
  &lt;div class="leftcolumn"&gt;
    &lt;div class="card"&gt;
      &lt;h2&gt;TITLE HEADING&lt;/h2&gt;
      &lt;h5&gt;Title description, Dec 7, 2017&lt;/h5&gt;
      &lt;div class="fakeimg" style="height:200px;"&gt;Image&lt;/div&gt;
      &lt;p&gt;Some text..&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="card"&gt;
      &lt;h2&gt;TITLE HEADING&lt;/h2&gt;
      &lt;h5&gt;Title description, Sep 2, 2017&lt;/h5&gt;
      &lt;div class="fakeimg" style="height:200px;"&gt;Image&lt;/div&gt;
      &lt;p&gt;Some text..&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="rightcolumn"&gt;
    &lt;div class="card"&gt;
      &lt;h2&gt;About Me&lt;/h2&gt;
      &lt;div class="fakeimg" style="height:100px;"&gt;Image&lt;/div&gt;
      &lt;p&gt;Some text about me in culpa qui officia deserunt mollit anim..&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="card"&gt;
      &lt;h3&gt;Popular Post&lt;/h3&gt;
      &lt;div class="fakeimg"&gt;Image&lt;/div&gt;&lt;br&gt;
      &lt;div class="fakeimg"&gt;Image&lt;/div&gt;&lt;br&gt;
      &lt;div class="fakeimg"&gt;Image&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="card"&gt;
      &lt;h3&gt;Follow Me&lt;/h3&gt;
      &lt;p&gt;Some text..&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="footer"&gt;
  &lt;h2&gt;Footer&lt;/h2&gt;
&lt;/div&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>
</details>

<hr>
<span class="w3-tag">CSS</span> <span class="w3-tag" style="background-color: #a19f9f">style.css</span><br/>
<details>
    <summary id="sumcss">Code CSS</summary>
    <pre class="prettyprint linenums">
    * {
    box-sizing: border-box;
  }
  
  /* Add a gray background color with some padding */
  body {
    font-family: Arial;
    padding: 20px;
    background: #f1f1f1;
  }
  
  /* Header/Blog Title */
  .header {
    padding: 30px;
    font-size: 40px;
    text-align: center;
    background: white;
  }
  
  /* Create two unequal columns that floats next to each other */
  /* Left column */
  .leftcolumn {   
    float: left;
    width: 75%;
  }
  
  /* Right column */
  .rightcolumn {
    float: left;
    width: 25%;
    padding-left: 20px;
  }
  
  /* Fake image */
  .fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
  }
  
  /* Add a card effect for articles */
  .card {
     background-color: white;
     padding: 20px;
     margin-top: 20px;
  }
  
  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }
  
  /* Footer */
  .footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
  }
  
  /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
  @media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
      width: 100%;
      padding: 0;
    }
  }

   /* Style the navigation bar */
.navbar {
    width: 100%;
    background-color: #555;
    overflow: auto;
  }
  
  /* Navbar links */
  .navbar a {
    float: left;
    text-align: center;
    padding: 12px;
    color: white;
    text-decoration: none;
    font-size: 17px;
  }
  
  /* Navbar links on mouse-over */
  .navbar a:hover {
    background-color: #000;
  }
  
  /* Current/active navbar link */
  .active {
    background-color: #04AA6D;
  }
  
  /* Add responsiveness - will automatically display the navbar vertically instead of horizontally on screens less than 500 pixels */
  @media screen and (max-width: 500px) {
    .navbar a {
      float: none;
      display: block;
    }
  } 

</pre>
</details>

                    </div>

                </div>

            </div>
            <hr>


<div class="w3-row ">
            <div class="w3-col w3-container " style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
  
                    <div class="w3-container">
                        <h2 style="text-align: center;">Première partie</h2>
                        <pre class="prettyprint">
Durant ce TP nous allons améliorer le blog développé lors des manipulations précédentes.
Cette fois le blog comportera une page d’accueil,
 une page de connexion et une page d’inscription.
- La page d’accueil affichera le titre du blog et les différents billets publiés.
- La page de connexion affichera un formulaire avec un identifiant et un mot de passe.
- La page d’inscription affichera un formulaire de saisie d’un nouvel utilisateur. 
    Le formulaire comportera les champs suivants :
        - Login
        - Mot de passe
Ces informations seront stockés dans une nouvelle table SQL.

Il est à noter que la page d’accueil et les deux autres pages forment trois pages HTML,
reliées entre elles par des liens.

Dans toutes ces pages, il y aura un menu de navigation. (en <span style="color:#DAE8FC;">bleu</span> ci-dessous).
Ce menu sera stocké dans un fichier à part (menu.php par exemple)
 et sera inclu dans chacune des pages.

BONUS:
- On ne peut pas stocker deux fois le même login dans la table SQL
- On peut utiliser les sessions (voir <a href="http://rfosse.vvv.enseirb-matmeca.fr/IT103/articles/article_php.php#session_id">ici</a> pour un exemple)
pour stocker les informations de connexion 
et afficher le nom de l’utilisateur connecté sur la page d accueil.
- On remplace le lien "connexion" par "déconnexion" sur la page d’accueil 
si l’utilisateur est connecté.
- Rendre le tout joli avec du CSS :)
</pre>
<p style="text-align: center;" >
<img src="images/TP1.png" alt="TP1">
</p>
<p style="text-align: center;" >
<b>Schèma représentant les trois pages à implémenter.</b>
</p>
<a href="Part1/IT103-correction-Part1.zip" download="correction-IT103-TP1.zip" style="text-decoration: none;">
    <button class="w3-button w3-block w3-green "><i class="bi bi-download"></i> Correction</button>
</a>
<br>
<a href="Part1/index.php" style="text-decoration: none;">
    <button class="w3-button w3-block w3-blue "><i class="bi bi-globe"></i> Consuler en ligne ici</button>
</a>
<hr>
                    </div>
                </div>
                <hr>
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
  
                    <div class="w3-container">
                        <h2 style="text-align: center;">Seconde partie</h2>
                        <pre class="prettyprint">
Pour ce qui est de l’apparence du blog, elle va rester identique.
Par contre l’utilisateur va maintenant pouvoir ajouter et supprimer les posts du blog.
Dans un fichier admin.php (accessible seulement si on est connecté),
l utilisateur pourra ajouter un nouveau post.
Le fichier comportera un formulaire pouvant de créer un nouveau post (voir ci dessous).
Chaque billet sera composé de :
    - un titre
    - un auteur
    - un contenu
    - une date de publication
    - un lien vers la page de commentaires (en bonus)
De plus, sur chaque billet, il y aura un bouton permettant de supprimer le billet.
Toutes les informations du blog devront être stockées dans une base de données.

Le contenu du blog devra donc être généré automatiquement
en fonction du contenu de la base de données.

BONUS:
- Pouvoir modifier un billet déjà existant
- Ajouter des catégories pour les différents billets
- Ajouter des commentaires pour chaque billet
- Ajouter un formulaire de contact
</pre>
<p style="text-align: center;" >
<img src="images/TP1_part2.png" alt="TP1_part2">
</p>
<p style="text-align: center;" >
<b>Nouveau schèma des fonctionnalités à implémenter.</b>
</p>
<br>
<a href="Part2/index.php" style="text-decoration: none;">
    <button class="w3-button w3-block w3-blue "><i class="bi bi-globe"></i> Consultez en ligne ici</button>
</a>
<hr>
                    </div>

                </div>

            </div>
            <hr>

            <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
  
                    <div class="w3-container">
                        <h2 style="text-align: center;">Envoyez moi votre code !</h2>
                        <pre class="prettyprint">
 A la fin de la séance, créer une archive NOM_PRENOM.zip comprenant :
    - les différents fichiers PHP;
    - les fichiers CSS pour la mise en page;
    - Une rapide explication dans un fichier .txt si nécessaire
envoyez le moi en cliquant sur le bouton ci-dessous.
</pre>
<br />
                        <button class="w3-button w3-block w3-blue " onclick="sendfile()">Cliquez ici !</button>

  <br/>
                    </div>
                </div>
                <hr>
                <script>
             var client = filestack.init("AYkhU5C8ySnaawchTAX52z");
             function sendfile() {
     console.log("Picking Watermark");
     //Limiting file types and number for uploading in the picker
     client.pick({
         //Only accepting at most 1 file
         maxFiles:10,
         accept: ['text/*','.zip','.tar.gz'],
         fromSources: ["local_file_system"],
     });
 }
         </script>
<style>
details {
  border-radius: 3px;
  background: #EEE;
  margin: 1em 0;
}

#sumhtml {
  background: #81d4fa;
  color: #FFF;
  border-radius: 3px;
  padding: 5px 10px;
  outline: none;
}

#sumcss {
  background: #ff8a65;
  color: #FFF;
  border-radius: 3px;
  padding: 5px 10px;
  outline: none;
}

#title {
    background: rgb(77, 162, 248);
    color: #FFF;
}

/* Style the summary when details box is open */
details[open] summary {
  background: #69c773;
  color: #333;
}
    </style>
    </div>
<?php include("../includes/footer.html"); ?>
