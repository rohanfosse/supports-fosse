<? include "../includes/header_article.php" ?>

<style>
ul.no-bullets {
  list-style-type: none;
  padding: 0px;
  text-align: center;
}

li.no-bullets {
   display: inline-block;
   width: auto;
   list-style: outside none none;
}
h3 {
    text-align: center;
    color: #0d47a1;
}
</style>


    <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <h1><b>Le Projet - <span style="color:#0d47a1;">AskAround</span></b></h1>
        </header>


        <div class="w3-row ">
          <div class="w3-col w3-container" style="width:20%"></div>
          <div class="w3-col" style="width:60%">
              <!-- Blog entry -->
              <div class="w3-card-4 w3-margin w3-white">

                  <div class="w3-container">
                      <h2 style="text-align: center;">Introduction</h2>
 
                      Le projet de programmation web doit être réalisé par <strong>binômes</strong>.
                       Il a pour but de vous faire développer une application web utilisant l’architecture dynamique côté serveur.<br>
                       Le projet a pour but de développer une application de gestion de questions-réponses de type <a href="https://stackoverflow.com/">StackOverflow</a>.<br>
                        Cette application se nommera <strong>AskAround</strong>. <br> 
                        <hr> 
                        <h3 style="text-align: center;">Fonctionnement de StackOverflow</h3>
                        

                        <strong>Stack Overflow</strong> est un site de question réponse. Chaque membre peut voter pour les questions et réponses postées, faisant gagner des points, appelés réputation, à leurs auteurs.
                         Il est également possible de voter contre (downvote) pour pénaliser l'auteur de la réponse et indiquer aux futurs lecteurs que cette réponse n'est pas pertinente.<br>

Le but de ces votes est de mettre en avant les réponses de qualité, tout en récompensant leurs auteurs, leur donnant accès à des privilèges quand certains seuils de réputation sont atteints
 (par exemple : pouvoir voter, voir moins de publicités, pouvoir fermer les questions).
<br><br> 
 <em><a href="https://fr.wikipedia.org/wiki/Stack_Overflow">Source: Wikipedia</a></em>
 <hr> 
                        <h3 style="text-align: center;">Notation et technologies autorisées</h3>
                      
                        Vous serez notés sur les éléments suivants :
<ul>
    <li> Ergonomie du site (sur 6) </li>
    <li>Qualité du code HTML5 et CSS (sur 6)</li>
    <li>Qualité du code PHP (sur 6)</li>
    <li>Qualité du code SQL (sur 2)</li>
</ul>                        

Voici la liste des technologies qui sont autorisées dans le projet :

<ul class="no-bullets">
    <li class="no-bullets"><a href="https://www.w3schools.com/html/"><span class="w3-tag" style="background-color: #ED752B ">HTML</span></a></li>
    <li class="no-bullets"><a href="https://www.w3schools.com/css/"><span class="w3-tag" style="background-color: #46735F ">CSS</span></a></li>
    <li class="no-bullets"><a href="https://www.w3schools.com/php/"><span class="w3-tag" style="background-color: #FBC026 ">PHP</span></a></li>
    <li class="no-bullets"><a href="https://www.w3schools.com/mysql/"><span class="w3-tag" style="background-color: #AED581 ">MySQL</span></a></li>
    <li class="no-bullets"><a href="https://www.w3schools.com/js/default.asp"><span class="w3-tag" style="background-color: #2A3F52 ">Javascript</span></a></li>
    <li class="no-bullets"><a href="https://www.w3schools.com/jquery/"><span class="w3-tag" style="background-color: #77D2E0 ">JQuery</span></a></li>
    <li class="no-bullets"><a href="https://www.w3schools.com/bootstrap5/index.php"><span class="w3-tag" style="background-color: #adb9d3 ">Bootstrap</span></a></li>
</ul>
<hr> 
<h3 style="text-align: center;">Plagiat</h3>

Enfin faites particulièrement attention au <strong>plagiat</strong>, j’utilise un logiciel qui permet de détecter les copier-coller automatiquement,
 tout projet suspect sera étudié avec la plus grande attention.<br>

Cependant, vous pouvez bien évidemment récupérer le code que vous avez développé pour les TPs de ce cours.
<br>
<br>
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
                      <h2 style="text-align: center;">Fonctionnalités demandées</h2>
 
<hr> 
                      <h3 style="text-align: center;"> Inscription des utilisateurs</h3>

Un utilisateur doit pouvoir s’inscrire sur le serveur. Les informations qui sont fournies en cas d’inscription sont :
     <ul>
         <li> e-mail (unique dans la base) </li>
            <li> mot de passe</li>
            <li> pseudo </li>
     </ul>
  Par la suite, d'autres informations pourront être rajoutés (en Bonus).          

  <hr>
  <h3 style="text-align: center;">Authentification</h3>

Pour s’authentifier il faut fournir son adresse mail (ou son pseudo) et son mot de passe.
 Un utilisateur peut se déconnecter. La consultation du site est interdite à toute personne qui n’est pas authentifiée.

 <hr>

 <h3 style="text-align: center;">Ajouter/éditer des questions</h3> 

Les utilisateurs peuvent poser des questions. Ces questions sont alors visibles par tous les utilisateurs, et l’utilisateur qui a posé la question est le seul qui peut la modifier.
 Il est par contre impossible de supprimer une question. Une question est composée :<br> 
 <ul>
     <li> d’un titre </li>
        <li> d’un contenu </li>
        <li> d’un auteur </li>
        <li> d’une date de publication </li>
</ul> 

<hr>
<h3 style="text-align: center;">Ajouter/éditer des réponses</h3>  

Les utilisateurs peuvent répondre à une question, et même à une question dont ils sont aussi eux-mêmes l’auteur.
 En outre, une fois une réponse donnée, elle reste modifiable par l’utilisateur qui l’a donnée.
  De plus, un utilisateur peut répondre plusieurs fois à la même question. Une réponse se compose de :<br> 
    <ul>
        <li> d’un contenu </li>
             <li> d’un auteur </li>
             <li> d’une date de publication </li>
    </ul>

    <hr>
    <h3 style="text-align: center;">Voter pour des réponses</h3>  


Chaque utilisateur peut voter pour la réponse qui lui paraît la meilleure.
 Bien entendu, il est impossible de voter pour une de ses propres réponses.
  Chaque utilisateur n’a qu’un seul vote pour les réponses d’une question donnée. 
  Par contre, il peut choisir de changer son vote pour une autre réponse.

  <hr>
  <h3 style="text-align: center;">Écran d’accueil</h3>   

L’écran d’accueil fonctionne de la manière suivante. Pour un utilisateur non-authentifié, il affiche le formulaire de connexion. Pour un utilisateur authentifié il présente les éléments suivants :
    <ul>
<li> La liste des dernières questions posées qui n’ont pas de réponses </li>
<li> La liste de ses propres questions </li>
<li> Un lien permettant de poser une nouvelle question </li>
<li> Un lien permettant de voir la liste de toutes les questions </li>
    </ul>

    <hr> 
    <h3 style="text-align: center;"> Visualiser une question et ses réponses</h3>   

Il doit être possible pour un utilisateur de visualiser une question associée à toutes ses réponses. Dans ce cas la question est affichée en premier, suivie de la liste des réponses triées par nombre de votes décroissant.
<br> <br> 

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
                      <h2 style="text-align: center;">Contraintes</h2>
   
Bien entendu l’application doit être le plus robuste possible à la saisie d'informations erronées (mail dans un format non valide, etc...).<br>
Des messages d’erreurs clairs doivent être affichés en cas de problème avec l’application.<br>
L’application doit être sécurisée. Il ne doit pas être possible d’accéder aux informations d’un utilisateur sans avoir rentré au moins une fois son mail et mot de passe. Il ne faut non plus qu’un utilisateur puisse modifier des questions qu’il n’a pas posé.


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
                      <h2 style="text-align: center;">Bonus</h2>
   
                      Un bonus sera alloué aux groupes qui utiliseront JavaScript, Bootstrap ou JQuery pour améliorer l’ergonomie du site.<br>
                       De la même manière, vous pouvez implémenter des fonctionnalités supplémentaires, après discussion avec l’enseignant.


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
                      <h2 style="text-align: center;">Deploiement</h2>
                      Un script doit permettre de déployer l’application sur un serveur comportant Apache, PHP et MySQL. En outre le script de déploiement doit automatiquement :
<ol>
    <li> créer toutes les tables nécessaires à l’application </li> 
    <li> créer les utilisateurs (login/password) : max/max et bob/bob
    <li> créer une question de max : "<em>Hello?</em>"
    <li> créer une réponse de bob : "<em>Hello!</em>"
    <li> ajouter un vote de max pour la réponse de bob</li> 
</ol>
Le script de déploiement doit être configuré pour se connecter sur un serveur MySQL à l’adresse *localhost* avec un login de <em>root</em> et pas de <em>password</em>. Il doit impérativement se trouver à la racine du projet et se nommer : <em>install.php</em>.

                  </div>
              </div>
          </div>
          <hr>

      </div>

      <div class="w3-row ">
          <div class="w3-col w3-container" style="width:20%"></div>
          <div class="w3-col" style="width:60%">
              <!-- Blog entry -->
              <div class="w3-card-4 w3-margin w3-white">

                  <div class="w3-container">
                      <h2 style="text-align: center;">Architecture et Date du rendu</h2>
                    Un fichier de description de l'architecture sera demandé, de la forme :
<pre>
<code>
<em>src/fichier1.php</em> : description du fichier 1.
<em>src/fichier2.js</em> : description du fichier 2.
</code>
</pre>


Les descriptions doivent être courtes et indiquer clairement quelles sont les fonctionnalités du fichier. Vous devez compresser le tout dans une archive nommée <em>it103-2022-gN.zip</em> avec N étant le numéro de votre groupe.<br><br>
 Enfin, les fichiers sources doivent être correctement indentés. Les groupes ne respectant pas ces règles se verront appliquer un malus.<hr>

<p style="text-align:center;"><strong> Le projet est à rendre au plus tard le </strong><span class="w3-tag" style="background-color: #f44336 ">20 Mai 2022 à 23h59</span></p>.

                  </div>
              </div>
          </div>
          <hr>

      </div>
<?php include("../includes/footer.html"); ?>