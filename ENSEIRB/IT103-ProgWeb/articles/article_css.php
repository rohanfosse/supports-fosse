<? include "../includes/header_article.php" ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<style>
h2 {
    text-align: center;
}

</style>
    <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->

        <div class="w3-row ">
          <div class="w3-col w3-container" style="width:20%"></div>
          <div class="w3-col" style="width:60%">
              <!-- Blog entry -->
              <div class="w3-card-4 w3-margin w3-white">

                  <div class="w3-container">
                      <h2 style="text-align: center;">Quelques liens utiles</h2>
                      <ul>
                        <li><a href="IT103-Slides.pdf">Slides du cours</a></li>
                        <li><a href="ttps://www.labri.fr/perso/falleri/dist/ens/it103/m3/">Site de Jean-Rémy Falleri</a>                        </li>
                        <li><a href="https://www.w3schools.com/css/default.asp">Tutoriel CSS</a></li>                      </ul>



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
                        <h2>Comment intégrer du css dans une page HTML ?</h2>
                        <p> Le code CSS sera écrit dans un fichier <em>my.css</em> situé dans le même dossier que le
                            fichier HTML.</p>
                        <pre class="prettyprint linenums lang-html">
&lt;!doctype html&gt;
&lt;html&gt;
&lt;head&gt;
&lt;meta charset="UTF-8"&gt; &lt;!-- On autorise les accents --&gt;
&lt;link href='my.css' rel='stylesheet'&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;p&gt;Un beau paragraphe&lt;/p&gt;
&lt;/body&gt;
&lt;/html&gt;
</pre>

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
                        <h2>Et le fichier CSS, à quoi il ressemble ?</h2>
                        <pre class="prettyprint linenums">
p { # un paragraphe
    font-family: "Raleway", sans-serif; # police
    font-size: 1.5em; # taille de la police
    font-weight: bold; # gras
    color: red; # couleur
}
</pre>

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
                        <h2>Comment utiliser les <em>id</em> ?</h2>
<span class="w3-tag">CSS</span>
                        <pre class="prettyprint linenums">
#my_class {
    color: red;
}
#my_class2 {
    color: blue;
}
</pre>
<span class="w3-tag">HTML</span>
                        <pre class="prettyprint linenums">
&lt;p id="my_class"&gt;
    Un paragraphe
&lt;/p&gt;
&lt;p id="my_class2"&gt;
    Un autre paragraphe
&lt;/p&gt;
</pre>

                    </div>
                </div>

            </div>

            <div class="w3-row ">

                <div class="w3-col w3-container" style="width:20%"></div>
                <div class="w3-col" style="width:60%">
                    <!-- Blog entry -->
                    <div class="w3-card-4 w3-margin w3-white">
    
                        <div class="w3-container">
                            <h2>Comment utiliser les classes?</h2>
    <span class="w3-tag">CSS</span>
                            <pre class="prettyprint linenums">
.my_class {
    color: red;
}
</pre>
    <span class="w3-tag">HTML</span>
                            <pre class="prettyprint linenums">
&lt;p class="my_class"&gt;
    Un paragraphe
&lt;/p&gt;
&lt;p class="my_class"&gt;
    Un autre paragraphe
&lt;/p&gt;
</pre>
    
                        </div>
                    </div>
                </div>
                <div class="w3-row ">

                    <div class="w3-col w3-container" style="width:20%"></div>
                    <div class="w3-col" style="width:60%">
                        <div class="w3-card-4 w3-margin w3-white">
    
                            <div class="w3-container">
                                <h2>Quelle différence entre une classe et un <em>id</em> ?</h2>
                        <p> Il existe une différence notable entre les deux attributs class et id : chaque id doit avoir une valeur <b>unique</b>
                            dans une même page tandis que plusieurs attributs class peuvent partager la même valeur.</p>
                            </div>
                        </div>
                    </div>
                </div>


        <div class="w3-row ">

            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">

                    <div class="w3-container">
                        <h2>Comment faire des colonnes en CSS?</h2>
<span class="w3-tag">CSS</span>
                        <pre class="prettyprint linenums">
#left {
    display: inline-block;
    width: 50%;
    margin: 0;
    padding: 0;
    background-color: red;
}
#right {
    display: inline-block;
    width: 50%;
    margin: 0;
    padding: 0;
    background-color: blue;
}
</pre>
<span class="w3-tag">HTML</span>
                        <pre class="prettyprint linenums">
&lt;div id="left"&gt;
    &lt;p&gt;Un paragraphe&lt;/p&gt;
&lt;/div&gt;
&lt;div id="right"&gt;
    &lt;p&gt;Un autre paragraphe&lt;/p&gt;
&lt;/div&gt;
</pre>

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
                        <h2>Comment faire des formulaires?</h2>
<span class="w3-tag">HTML</span>
                        <pre class="prettyprint linenums">
&lt;form&gt;  
    &lt;label for="nom"&gt;Entrer le nom&lt;/label&gt;&lt;br&gt;  
    &lt;input type="text" id="name" name="name"&gt;&lt;br&gt;  
    &lt;label for="pass"&gt;Entrer le Mot de passe&lt;/label&gt;&lt;br&gt;  
    &lt;input type="Password" id="pass" name="pass"&gt;&lt;br&gt;  
    &lt;input type="submit" value="submit"&gt;  
&lt;/form&gt;
</pre>
<p>Le formulaire est composé de cinq parties :</p>
<ul>
    <li>Un label pour le nom</li>
    <li>Un input pour le nom</li>
    <li>Un label pour le mot de passe</li>
    <li>Un input pour le mot de passe</li>
    <li>Un bouton submit</li>
</ul>
L’élément HTML &lt;input&gt; est un élément de formulaire fondamental. Il est utilisé pour créer des champs de formulaire, pour prendre les entrées de l’utilisateur.<br/>
 L'élément HTML' &lt;input type = « submit »&gt; permettent d’ajouter un bouton de soumission sur une page Web.</p>

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
            <h2>Ajouter des icones</h2>
Si vous souhaitez ajouter des icônes comme par exemple :<i class="bi bi-alarm-fill"></i>, il faut suivre le procole suivant:

Tout d'abord, inclure ce lien dans le header de votre page:
            <pre class="prettyprint linenums">
&lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"&gt;
</pre>

Puis, vous pouvez rajouter l'icône en utilisant le code suivant:
            <pre class="prettyprint linenums">
&lt;i class="bi bi-alarm-fill"&gt;&lt;/i&gt;
</pre>

Vous pouvez toutes les informations et toutes les icônes possible <a href="https://icons.getbootstrap.com/"> ici</a>.
    <br>
<br> 
        </div>
    </div>

</div>

<hr>



        </div>
    </div>
    <hr>

<?php include '../includes/footer.html'; ?>