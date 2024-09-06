<?php 

    if(isset($_POST["name"])) {
        $name = $_POST["name"];
    } else {
        $username = "";
    }
    if(isset($_POST["username"])) {
        $username = $_POST["username"];
    } else {
        $username = "";
    }
    if(isset($_POST["user-email"])) {
        $user_email = $_POST["user-email"];
    } else {
        $user_email = "";
    }
    if(isset($_POST["user-password"])) {
        $user_password = $_POST["user-password"];
    } else {
        $user_password = "";
    }

    //genera un id utente randomicamente con due lettere casuali come prefisso
    function randomId() {
        $id_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $id_numbers = '0123456789';
        $id_length = 6;
        $user_id = "";

        for ($i = 0;$i < $id_length;$i++) {
            if (strlen($user_id) < 2) {
                $randomIndex = rand(0, strlen($id_chars) - 1);
                $user_id .= $id_chars[$randomIndex];
            } else {
                $randomIndex = rand(0, strlen($id_numbers));
                $user_id .= $id_numbers[$randomIndex];
            }
        }
        return $user_id;
    };

    $id_utente = randomId();


    require_once("connection.php");

    if ($name!=="" && $username!=="" && $user_email!=="" && $user_password!=="") {
        $query = "INSERT INTO tms_database.utenti (id, IDUtente, nomeUtente, username, password, email) VALUES (NULL, '$id_utente', '$name', '$username', '$user_password', '$user_email')";

        $result = mysqli_query($connection, $query);
        
        header("location: index.php");
    }

?>