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
            <p><a href="https://www.labri.fr/perso/rfosse/IT103/articles/article_php.html#formumdp">Revenir sur la page d'exemple de PHP</a></p>
        </header>

        <hr />

        <div class="w3-row ">
            <div class="w3-col w3-container" style="width:20%"></div>
            <div class="w3-col" style="width:60%">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">

                    <div class="w3-container">
                        <h2>Résultat du formulaire avec mot de passe</h2>
                        <pre class="prettyprint linenums">
<?php
//Set the password
$password = "azerty"; 
//Let the user access protected content on page if the password match with the password that you have provided
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) { ?>
Félicitations !
Vous avez accédé avec succès au contenu protégé par un mot de passe !
<?php }
//Display this content if the provided password is wrong
else{ 
?>
Désolé...! Mauvais mot de passe!
<?php }
?>
</pre>

                    </div>
                </div>
            </div>
            <hr>

        </div>


</body>
</html>


<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Make MySQLi throw exceptions.

    try {
        // Try Connect to the DB with new MySqli object - Params {hostname, userid, password, dbname}
        $link = new mysqli("localhost", "rfosse", "m4hLMs5sf7wpuZCq", "rfosse");
    } catch (mysqli_sql_exception $e) { // Failed to connect? Lets see the exception details..
        echo "MySQLi Error Code: " . $e->getCode() . "<br />";
        echo "Exception Msg: " . $e->getMessage();
        exit; // exit and close connection.
    }

    //No Exceptions were thrown, we connected successfully, yay!

?>

<form action="<?php $_PHP_SELF ?>" method="post">
    <label for="nom">Nom:</label>
    <input type="text" name="nom" id="nom" />
    <input type="submit" name="submit" value="Envoyer" />

<br/>
Contenu de la table:<br/>
<?php

if(isset($_POST['submit'])) {
    $name = $_POST['nom'];

    $sql = "INSERT INTO `amis` (`NOM`) VALUES ('$name')";

    if ($link->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }
}

    if ($result = $link -> query("SELECT * FROM amis")) {
        // We got a result, lets see what it contains..
        while ($row = $result -> fetch_assoc()) {
            echo  "Bonjour " . $row['NOM'] . " !<br />";
        }
    
    }
    
    mysqli_close($link); // finally, close the connection
?>