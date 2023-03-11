<?php include "../../includes/header_article.php"; ?>

<div class="w3-content" style="max-width:1400px">
<div class="w3-row ">
    <br>
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">

                    <div class="w3-container">
                        <h2>Insérer des données à l'aide d'un formulaire</h2>
                        <p> Le code utilisé pour insérer les données dans une base de données à l'aide
                            d'un formulaire est le suivant:</p>
                            <span class="w3-tag">PHP</span> <span class="w3-tag" style="background-color: #a19f9f">index.php</span><br/>

<pre class="prettyprint linenums lang-php">
&lt;form action="&lt;?php $_PHP_SELF; ?&gt;" method="post"&gt; // On envoie les données sur la même page
    &lt;label for="name"&gt;Nom:&lt;/label&gt;
    &lt;input type="text" name="name"&gt;
    &lt;label for="surname"&gt;Prénom:&lt;/label&gt;
    &lt;input type="text" name="surname"&gt;
    &lt;input type="submit" name="submit"&gt;
&lt;/form&gt;
&lt;br/&gt;
&lt;php
    if(isset($_POST["submit"])){
        include "connect.php"; // Inclure le fichier
        $conn = connect(); // On se connecte à la base de données
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $sql = "INSERT INTO `table_exemple` (`NAME`,`SURNAME`)
         VALUES ('$name','$surname')";
        $result = $conn-&gt;query($sql);// On lance la requête
        if ($result === TRUE) {
            echo "L'enregistrement a été effectué avec succès";
        } else {
            echo "Error: " . $sql . "&lt;br&gt;" . $conn-&gt;error;
        }
    }
    &gt;
</pre>
<p> Cela nous donnera un formulaire avec deux champs de texte et un bouton submit.
    Lorsque l'on clique sur le bouton submit, les données sont envoyées à la page
    index.php.
    La page index.php va ensuite se connecter à la base de données et insérer les données
    dans la table table_exemple.
</p>

<form action="<?php $_PHP_SELF; ?>" method="post">
    <label for="name">Nom:</label>
    <input type="text" name="name">
    <label for="surname">Prénom:</label>
    <input type="text" name="surname">
    <input type="submit" name="submit">
</form>
<br/>
<?php
    if(isset($_POST["submit"])){
        include "../../includes/connect.php"; // Inclure le fichier
        $conn = bdd_connect(); // On se connecte à la base de données
        $name = $_POST["name"];
        $surname = $_POST["surname"];
        $sql = "INSERT INTO `table_exemple` (`NAME`,`SURNAME`)
         VALUES ('$name','$surname')";
        $result = $conn->query($sql);// On lance la requête
        if ($result === TRUE) {
            echo "L'enregistrement a été effectué avec succès";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
    <p style="text-align:center;">
<a href="http://rfosse.vvv.enseirb-matmeca.fr/IT103/exemple/sql/select_simple.php">Vérifier que la donnée a bien été insérée</a>
</p>
    <p style="text-align:center;">
<a href="http://rfosse.vvv.enseirb-matmeca.fr/IT103/articles/article_sql.php#select_simple">Revenir au cours sur SQL</a>
</p>

                    </div>
                </div>
            </div>
            <hr>
        </div>
        <?php include "../../includes/footer.html"; ?>
