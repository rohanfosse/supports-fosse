<? session_start();
include "../includes/header_article.php" ?>

<hr>

<div class="w3-row ">
    <div class="w3-col w3-container " style="width:20%"></div>
        <div class="w3-col" style="width:60%">
            <!-- Blog entry -->
            <div class="w3-card-4 w3-margin w3-white">

                <div id="title"  class="w3-container">
                    <h1 style="text-align: center;">TP2 - Calculatrice en PHP avec base de données </h1>
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
                    <h2 style="text-align: center;">Le Sujet</h2>
                    <pre class="prettyprint">
Dans ce TP, nous allons développer une calculatrice scientifique en PHP en utilisant
une base de données.
Il s agit d une calculatrice scientifique qui peut effectuer les tâches
arithmétiques simples (+, -, * et /) ainsi que d autres fonctions mathématiques,
telles que sin, cos, tan, min, max, log, exposant, pi, puissance et racine carrée.

Le code sera écrit dans un fichier PHP calc.php.
Toutes les informations devront être stockées dans une base de données MySQL.
Chaque utilisateur pourra s inscrire et se connecter sur votre site.
Nous pourrons pour cela récupérer le code du TP précédent.

Les calculs qu il effectuera seront associés à son identifiant.
Il sera donc possible de consulter l historique des calculs qu il a effectué.

BONUS:
- Rajouter un bouton permettant d effacer l historique des calculs.
- Calculer la moyenne/mediane/ecarts-types des calculs effectués.
- Ajouter un bouton permettant d afficher la liste des utilisateurs inscrits.

</pre>
<br>
<a href="Calculator/index.php" style="text-decoration: none;">
    <button class="w3-button w3-block w3-blue "><i class="bi bi-globe"></i> Consultez un exemple</button>
</a>
<hr>
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
                        <h2 style="text-align: center;">Envoyez moi votre code !</h2>
                        <pre class="prettyprint">
 A la fin de la séance, créer une archive NOM_PRENOM.zip comprenant :
    - les différents fichiers PHP;
    - les fichiers CSS pour la mise en page;
    - Une rapide explication dans un fichier .txt si nécessaire
envoyez le moi en cliquant sur le bouton ci-dessous.
</pre>
                        <br />
                        <button class="w3-button w3-block w3-blue " onclick="sendfile()"><i class="bi bi-cloud-upload"></i> Cliquez ici !</button>

                        <br />
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
                            maxFiles: 10,
                            accept: ['text/*', '.zip', '.tar.gz'],
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

                    #title {
                        background: rgb(77, 162, 248);
                        color: #FFF;
                    }

                    #sumcss {
                        background: #ff8a65;
                        color: #FFF;
                        border-radius: 3px;
                        padding: 5px 10px;
                        outline: none;
                    }

                    /* Style the summary when details box is open */
                    details[open] summary {
                        background: #69c773;
                        color: #333;
                    }
                </style>
            </div>
            <?php include("../includes/footer.html"); ?>