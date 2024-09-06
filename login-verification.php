<?php 

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

    require_once("connection.php");

    if ($user_email!=="" && $user_password!=="") {
        $query = "SELECT utenti.email, utenti.password FROM utenti";
    
        $result = mysqli_query($connection, $query);
        if (mysqli_num_rows($result)!=0) {
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                if ($row["email"] === $user_email && $row["password"] === $user_password) {
                header("location: index.php");
                } else {
                    header("location: login-verification-error.php");
                    die();
                }
            }
        }
    }

?>