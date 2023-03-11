<!DOCTYPE html>
<html>

<head>
    <title>IT103 - Blog d'exemple</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link ref="stylesheet" href="example_css.css">
    <script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: "Raleway", sans-serif
        }

        li.L0,
        li.L1,
        li.L2,
        li.L3,
        li.L5,
        li.L6,
        li.L7,
        li.L8 {
            list-style-type: decimal !important;
        }

        #example1_css {
            font-family: "Raleway", sans-serif;
            font-size: 1.5em;
            font-weight: bold;
            color: red;
        }
    </style>
</head>

<body class="w3-light-grey">

    <!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
            <h1><b>Exemple de formulaire PHP</b></h1>
            <p><a href="http://rfosse.vvv.enseirb-matmeca.fr/IT103/articles/article_php.php#formupost">Revenir sur la page d'exemple de PHP</a></p>
        </header>

        <hr />

        <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">

                    <div class="w3-container">
                        <h2>Résultat du formulaire</h2>
                        <pre class="prettyprint linenums">
<?php
echo $_POST["p1"]; // v1
echo $_POST["p2"]; // v2

foreach ($_POST as $param => $value) {
    echo "La variable " . $param . " vaut " . $value . "<br>";
}
?>
</pre>

                    </div>
                </div>
            </div>
            <hr>

        </div>


</body>
</html>


