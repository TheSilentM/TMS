<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "tms_database";

    $connection = mysqli_connect($host, $user, $password, $db);

    if(mysqli_connect_errno()) {
        echo "connessione fallita ".die(mysqli_connect_errno());
    };

?>