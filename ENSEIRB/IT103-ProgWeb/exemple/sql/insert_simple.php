<?php
    include "../../includes/connect.php"; // Inclure le fichier
    $conn = bdd_connect(); // On se connecte à la base de données
    $name = "Pierre";
    $surname = "Jacques";
    $sql = "INSERT INTO `table_exemple` (`NAME`,`SURNAME`) VALUES ('$name','$surname')";
    $result = $conn->query($sql);// On lance la requête
    if ($result === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>