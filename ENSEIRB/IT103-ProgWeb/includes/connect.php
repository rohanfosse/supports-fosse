<?php

function bdd_connect(){
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // Make MySQLi throw exceptions.

    try {
        // Try Connect to the DB with new MySqli object - Params {hostname, userid, password, dbname}
        $link = new mysqli("localhost", "rfosse", "m4hLMs5sf7wpuZCq", "rfosse");
    } catch (mysqli_sql_exception $e) { // Failed to connect? Lets see the exception details..
        echo "MySQLi Error Code: " . $e->getCode() . "<br />";
        echo "Exception Msg: " . $e->getMessage();
        exit; // exit and close connection.
    }
    return $link;
}

?>