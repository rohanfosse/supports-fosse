<?php
include "../../includes/header_article.php";
include "../../includes/connect.php"; // Inclure le fichier
$conn = bdd_connect(); // On se connecte à la base de données
    $sql = "SELECT * FROM `table_exemple`";
    $result = $conn->query($sql);// On lance la requête
?>

<div class="w3-content" style="max-width:1400px">
<div class="w3-row ">
    <br>
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">

                    <div class="w3-container">
                        <h2>Récupérer des données depuis une base de donnée</h2>
<p> Le code utilisé pour récupérer les données dans une base de données est le suivant:</p>
<pre class="prettyprint linenums lang-php">
&lt;?php
include "connect.php"; // Inclure le fichier
$conn = bdd_connect(); // On se connecte à la base de données
$sql = "SELECT * FROM `table_exemple`"; // On récupère les données de la table
$result = $conn->query($sql);// On lance la requête
while($row = $result->fetch_assoc()) { // on affiche ligne par ligne
echo "ID: ".$row["ID"]."-Name: ".$row["NAME"]."-Surname: ".$row["SURNAME"]."&lt;br&gt;";
}
?&gt;   
</pre>
On obtiendra une liste de toutes les données de la table, qui s'affichera comme ceci: 
                        <pre class="prettyprint linenums lang-html">
<?php
while($row = $result->fetch_assoc()) { 
echo "ID: " . $row["ID"]. " - Name: " . $row["NAME"]. " - Surname: " . $row["SURNAME"]. "<br>";
}
?>
</pre>
<p style="text-align:center;">
<a href="http://rfosse.vvv.enseirb-matmeca.fr/IT103/articles/article_sql.php#select_simple">Revenir au cours sur SQL</a>
</p>


                    </div>
                </div>
            </div>
            <hr>

        </div>
</div>
<?php include "../../includes/footer.html"; ?>