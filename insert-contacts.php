<?php 
    require_once("connection.php");

    if (isset(($_POST["first-name"]))) {
        $firstName = $_POST["first-name"];
    }

    if (isset($_POST["last-name"])) {
        $lastName = $_POST["last-name"];
    }

    if (isset($_POST["company-name"])) {
        $companyName = $_POST["company-name"];
    }

    if (isset($_POST["business-email"])) {
        $businessEmail = $_POST["business-email"];
    }

    if($firstName!=='' && $lastName!=='' && $companyName!=='' && $businessEmail!==''){
        $query = "INSERT INTO contact_requests (id, first_name, last_name, company_name, business_email) VALUES (NULL, '$firstName', '$lastName', '$companyName', '$businessEmail')";

        mysqli_query($connection, $query);

        header("location: contacts.php");
    }
?>