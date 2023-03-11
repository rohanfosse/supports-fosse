<? include "../includes/header_article.php" ?>


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
                        <li><a href="ttps://www.labri.fr/perso/falleri/dist/ens/it103/m3/">Site de Jean-Rémy Falleri</a>
                        <li><a href="https://www.nextinpact.com/article/30325/109058-se-connecter-a-serveur-webdav-sous-linux-macos-ou-windows">Aide de connexion à webdav</a>
                        </li>
                        <li><a href="https://www.w3schools.com/php/default.asp">Tutoriel PHP</a></li>
                        <li><a href="https://www.labri.fr/perso/falleri/dist/ens/it103/sheets/php.png">Résumé des fonctions principales en PHP</a> </li>
                      </ul>



                  </div>
              </div>
          </div>
          <hr>

      </div>


      <h1 style="text-align: center;">Exemples</h1>
        <div class="w3-row ">
          <div class="w3-col w3-container" style="width:20%"></div>
          <div class="w3-col" style="width:60%">
              <!-- Blog entry -->
              <div class="w3-card-4 w3-margin w3-white">

                  <div class="w3-container">
                      <h2 style="text-align:center;">Déclarer et afficher une variable</h2>
                      <pre class="prettyprint linenums lang-php">
&lt;?php
$a = "toto";
echo $a;
echo "Bonjour" . $a;
echo "Bonjour" . $a . "!";
?&gt;  
</pre>
<details>
  <summary><b>Rendu</b></summary>
<pre class="prettyprint linenums">
toto
Bonjour toto
Bonjour toto!
</pre>
</details>
<br/>

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
                    <h2 style="text-align:center;">Une condition</h2>
                    <pre class="prettyprint linenums lang-php">
&lt;?php
$a = 2;
if ($a == 2) {
    echo "C'est vrai";
}
else {
    echo "C'est faux";
}
?&gt;  
</pre>
<details>
  <summary><b>Rendu</b></summary>
<pre class="prettyprint linenums">
C'est vrai
</pre>
</details>
<br/>

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
                  <h2 style="text-align:center;">Une boucle for</h2>
                  <pre class="prettyprint linenums lang-php">
&lt;?php
for ($i = 1; $i &lt;= 5; $i++) {
  echo $i;
}
?&gt;  
</pre>
<details>
<summary><b>Rendu</b></summary>
<pre class="prettyprint linenums">
1
2
3
4
5
</pre>
</details>
<br/>

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
                <h2 style="text-align:center;">Une boucle while</h2>
                <pre class="prettyprint linenums lang-php">
&lt;?php
$i = 1;
while ($i &lt;= 5) {
    echo $i;
    $i++;
}
?&gt;  
</pre>
<details>
<summary><b>Rendu</b></summary>
<pre class="prettyprint linenums">
1
2
3
4
5
</pre>
</details>
<br/>

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
                  <h2 style="text-align:center;">Un parcours de tableau</h2>
                  <pre class="prettyprint linenums lang-php">
&lt;?php
$strings = array("a", "b", "c");
$strings = ["a", "b", "c"];
array_push($strings, "d"); 
foreach ($strings as $val) {
    echo $val;
}
?&gt;
</pre>
<details>
  <summary><b>Rendu</b></summary>
<pre class="prettyprint linenums">
a
b
c
d
</pre>
</details>
<br/>

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
                <h2 style="text-align:center;">Une fonction</h2>
                <pre class="prettyprint linenums lang-php">
&lt;?php
function add($a, $b) {
  return $a + $b;
}
echo add(2,5);
?&gt;
</pre>
<details>
  <summary><b>Rendu</b></summary>
<pre class="prettyprint linenums">
7
</pre>
</details>
<br/>

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
              <h2 style="text-align:center;">Autre exemple de fonction: l'aire d'un rectangle</h2>
              <pre class="prettyprint linenums lang-php">
&lt;?php
  function rect_area($length = 2, $width = 4) 
  //déclaration de la fonction avec des paramètres prédéfinis
  {
    $area = $length * $width;
    echo "Aire du rectangle de longueur " . $length . " & largeur " . $width . 
    " est " . $area;
  }
  
  rect_area(); // Appelle de la fonction sans paramètre
  rect_area(4,7); // Appelle de la fonction avec des paramètres           
?&gt;
</pre>
<details>
<summary><b>Rendu</b></summary>
<pre class="prettyprint linenums">
Aire du rectangle de longueur 2 & largeur 4 est 8
Aire du rectangle de longueur 4 & largeur 7 est 28  
</pre>
</details>
<br/>

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

                    <div class="w3-container" id="formupost">
                        <h2 style="text-align:center;">Un formulaire avec la méthode POST</h2>
                        <span class="w3-tag">HTML</span>
                        <pre class="prettyprint linenums lang-html">
&lt;form action="test.php" method="post"&gt;
&lt;input name="p1" type="text"&gt;
&lt;input name="p2" type="text"&gt;
&lt;input type="submit"&gt;
&lt;/form&gt;
</pre>
                        <span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">test.php</span><br/>
                        <pre class="prettyprint linenums lang-php">
&lt;?php
echo $_POST["p1"]; // affiche la valeur du paramètre p1
echo $_POST["p2"]; // affiche la valeur du paramètre p2
                          
foreach ($_POST as $param => $value) {
    echo $param . ": " . $value . "<br>";
}
?&gt;
</pre>
<details>
  <summary><b>Essaye ici !</b></summary>
  <form action="../exemple/php/exemple_post.php" method="post">
  <input name="p1" type="text">
  <input name="p2" type="text">
  <input type="submit">
  </form>
</details>
<br />
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

                  <div class="w3-container" id="formuget">
                      <h2 style="text-align:center;">Un formulaire avec la méthode GET</h2>
                      <span class="w3-tag">HTML</span>
                      <pre class="prettyprint linenums lang-html">
&lt;form action="test.php" method="get"&gt;
&lt;input name="p1" type="text"&gt;
&lt;input name="p2" type="text"&gt;
&lt;input type="submit"&gt;
&lt;/form&gt;
</pre>
                      <span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">test.php</span><br/>
                      <pre class="prettyprint linenums lang-php">
&lt;?php
echo $_GET["p1"]; // affiche la valeur du paramètre p1
echo $_GET["p2"]; // affiche la valeur du paramètre p2
                        
foreach ($_GET as $param => $value) {
  echo $param . ": " . $value . "<br>";
}
?&gt;
</pre>
<details>
<summary><b>Essaye ici !</b></summary>
<form action="../exemple/php/exemple_get.php" method="get">
<input name="p1" type="text">
<input name="p2" type="text">
<input type="submit">
</form>
</details>
<br />
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

                  <div class="w3-container" id="formumdp">
                      <h2 style="text-align:center;">Un formulaire avec mot de passe</h2>
                      <span class="w3-tag">HTML</span>
                      <pre class="prettyprint linenums lang-html">
&lt;form action="../exemple/php/password.php" id ="myForm" method="post"&gt;
  &lt;input name="password" type="password"&gt;&lt;input value="Submit" type="submit"&gt;
&lt;/form&gt;
</pre>
                      <span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">password.php</span> <br/>
                      <pre class="prettyprint linenums lang-php">
&lt;?php
//On défini le mot de passe
$password = "azerty"; 
//Permettre à l'utilisateur d'accéder au contenu protégé de la page
// si le mot de passe correspond au mot de passe que vous avez fourni.
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) { ?&gt;
Félicitations !
Vous avez accédé avec succès au contenu protégé par un mot de passe !
&lt;?php }
//Afficher ce contenu si le mot de passe fourni est incorrect
else{ 
    ?&gt;
Désolé...! Mauvais mot de passe!
  &lt;?php } 
?&gt;
</pre>
<details>
  <summary><b>Essaye ici !</b></summary>
  <form action="../exemple/php/password.php" id ="myForm" method="post">
  <input name="password" type="password"><input value="Submit" type="submit">
</form>
</details>
<br />
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

                <div class="w3-container" id="session_id">
                    <h2 style="text-align:center;">Un exemple d'utilisation de session</h2>
                    <span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">demo_session1.php</span><br/>
                    <pre class="prettyprint linenums lang-html">
&lt;?php
  // on ouvre la session
  session_start();
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
      
&lt;?php
  // On définie les variables de session
  $_SESSION["favcolor"] = "vert";
  $_SESSION["favanimal"] = "chat";
  echo "Les variables de session ont été définies.";
?&gt;
&lt;/body&gt;
&lt;/html&gt; 
</pre>
<span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">demo_session2.php</span><br/>
                    <pre class="prettyprint linenums lang-html">
&lt;?php
  session_start(); // On réouvre la session
?&gt;
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
                      
&lt;?php
  // On écrit les variables de session définies précédemment
  echo "La couleur préférée est le " . $_SESSION["favcolor"] . ".&lt;br&gt;";
  echo "L'animal préféré est le " . $_SESSION["favanimal"] . ".";
?&gt;
&lt;/body&gt;
&lt;/html&gt;                       
</pre>
<details>
  <summary><b>Rendu</b></summary>
<pre class="prettyprint linenums">
La couleur préférée est le vert.
L animal préféré est le chat.
</pre>
</details>
<br/>
</div>
            </div>
        </div>
        <hr>
        </div>


<h1 style="text-align: center;">Exercices</h1>
<p style="text-align: center;">Une partie des exercices de cette page proviennent d'<a href="https://www.labri.fr/perso/falleri/perso/ens/it103/m3/">ici.</a></p>       

<div class="w3-row ">
  <div class="w3-col w3-container" style="width:20%"></div>
  <div class="w3-col" style="width:60%">
      <!-- Blog entry -->
      <div class="w3-card-4 w3-margin w3-white">

          <div class="w3-container">
              <h2 style="text-align:center;">Exercice 1: Hello world !</h2>
              La première manipulation consiste en rédiger un script qui va afficher le résultat suivant:
              <pre class="prettyprint linenums lang-php">
Bonjour 1
Bonjour 2
...
Bonjour 100                
</pre>
<hr>
 <details>
  <summary><b>Solution</b></summary>
  <pre class="prettyprint linenums lang-php">
&lt;?php
for($i=1;i&lt;=100;$i++)
{
    echo "Bonjour $i &lt;br/&gt;";
}
?&gt; 
</pre>
    
  </details>
  <br/>

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
              <h2 style="text-align:center;">Exercice 2: La moyenne</h2>
              Modifier le code ci-dessous pour calculer la moyenne des notes.
              <pre class="prettyprint linenums lang-php">
&lt;?php
    $note_maths = 15;
    $note_francais = 12;
    $note_histoire_geo = 9;
    $moyenne = 0;
    echo 'La moyenne est de '.$moyenne.' / 20.';
?&gt;        
</pre>
<hr>
 <details>
  <summary><b>Solution</b></summary>
  <pre class="prettyprint linenums lang-php">
&lt;?php
$note_maths = 15;
$note_francais = 12;
$note_histoire_geo = 9;
$moyenne = ($note_maths + $note_francais + $note_histoire_geo) / 3;
echo 'La moyenne est de '.$moyenne.' / 20.';
?&gt; 
</pre>
    
  </details>
  <br/>
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
              <h2 style="text-align:center;">Exercice 3: Les conditions</h2>
              Déclarer une variable $budget qui contient la somme de 1 553,89 €.
 Déclarer une variable $achats qui contient la somme de 1 554,76 €. Afficher si le budget permet de payer les achats.
<hr>
 <details>
  <summary><b>Solution</b></summary>
  <pre class="prettyprint linenums lang-php">
&lt;?php
  $budget = 1553.89;
  $achats = 1554.76;
  if ($budget >= $achats) {
      echo 'Le budget permet de payer les achats.';
  }
  else {
      echo 'Le budget ne permet pas de payer les achats.';
  }
?&gt;
</pre>
    
  </details>



          </div>
          <br/>
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
              <h2 style="text-align:center;">Exercice 4: Factorielle</h2>
              Écrivez un programme pour calculer la factorielle d’un nombre en utilisant la boucle for
              <hr>
              <details>
               <summary><b>Solution</b></summary>
               <pre class="prettyprint linenums lang-php">
&lt;?php
function factorielle($nombre) {
    $resultat = 1;
    for ($i = 1; $i <= $nombre; $i++) {
        $resultat = $resultat * $i;
    }
    return $resultat;
}
echo 'Le résultat est ' . factorielle(5) . '.';
?&gt; 
</pre>
                 
               </details>



          </div>
          <br/>
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
              <h2 style="text-align:center;">Exercice 5: Boucle for</h2>
              En utilisant deux boucles for, écrire un script qui produit le résultat ci-dessous.
<pre class="prettyprint linenums lang-php">
1
22
333
4444
55555            
</pre>
<hr>
<details>
 <summary><b>Solution</b></summary>
 <pre class="prettyprint linenums lang-php">
&lt;?php
for ($i=1; $i &lt;= 5; $i++) {
  for ($j=1; $j &lt;= $i; $j++) {
      echo $i;
  }
  echo '<br/>';
}
?&gt; 
</pre>
   
 </details>
<br/>
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
              <h2 style="text-align:center;">Exercice 6: Hello world personnalisé!</h2>
              Rédiger un script qui prend votre nom en paramètre et qui va vous répondre bonjour de la manière suivante (en remplaçant NOM par le nom passé en paramètre) :
              <pre class="prettyprint linenums lang-php">
Bonjour NOM!               
</pre>
Le script doit détecter ces deux situations:
<pre class="prettyprint linenums lang-php">
Si le nom est vide, il doit afficher "Bonjour inconnu!"
Si le nom contient un seul mot, il doit afficher "Bonjour NOM!"
</pre>
Vous devez rédiger une version où le paramètre NOM est passé grâce à une commande GET et une commande POST.
<hr>
<details>
 <summary><b>Solution</b></summary>
 <b>Solution avec la méthode GET</b><br/>
 <span class="w3-tag">HTML</span> <span class="w3-tag" style="background-color: #a19f9f">formulaire_get.html</span><br/>
 <pre class="prettyprint linenums lang-html">
&lt;form action="resultat_get.php" method="get"&gt;
    &lt;input name="nom" type="text"&gt;
    &lt;input type="submit"&gt;
&lt;/form&gt;
</pre>
<span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">resultat_get.php</span><br/>
<pre class="prettyprint linenums lang-php">
&lt;?php
if (isset($_GET['p1'])) {
    echo 'Bonjour ' . $_GET['nom'] . '!';
}
else {
    echo 'Bonjour inconnu!';
}
</pre>
<br/>

<b>Solution avec la méthode POST</b><br/>
<span class="w3-tag">HTML</span> <span class="w3-tag" style="background-color: #a19f9f">formulaire_post.html</span><br/>
<pre class="prettyprint linenums lang-html">
&lt;form action="resultat_post.php" method="post"&gt;  
   &lt;input name="nom" type="text"&gt;
   &lt;input type="submit"&gt;
&lt;/form&gt;
</pre>
<span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">resultat_post.php</span><br/>
<pre class="prettyprint linenums lang-php">
&lt;?php
if (isset($_POST['p1'])) {
   echo 'Bonjour ' . $_POST['nom'] . '!';
}
else {
   echo 'Bonjour inconnu!';
}
</pre>

 </details>
<br/>

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
              <h2 style="text-align:center;">Exercice 7: Hello world personnalisé avec mémorisation</h2>
              Dans cette troisième manipulation, nous allons améliorer le script précédent pour qu’il puisse mémoriser votre nom. Voici son comportement :
              <pre class="prettyprint linenums lang-php">
Si vous n’avez jamais fourni de NOM il vous le demande
Si vous fournissez un NOM il affiche bonjour et le mémorise
A tout moment vous pouvez demander d’oublier le nom qui est mémorisé                          
</pre>
Vous devez rédiger une version où le paramètre NOM est passé grâce à une commande GET et une commande POST.

          </div>
      </div>
  </div>
  <hr>
</div>

        </div>

    </div>
    <hr>    

    <?php include '../includes/footer.html'; ?>
