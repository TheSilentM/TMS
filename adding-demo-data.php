<?php 
    require_once("connection.php");

    if (isset($_POST["first-name"])) {
        $firstName = $_POST["first-name"];
    }

    if (isset($_POST["last-name"])) {
        $lastName = $_POST["last-name"];
    }

    if (isset($_POST["company-name"])) {
        $companyName = $_POST["company-name"];
    }

    if (isset($_POST["company-email"])) {
        $companyEmail = $_POST["company-email"];
    }
    
    if (isset($_POST["erp_used_list"])) {
        $erp = $_POST["erp_used_list"];
    }

    if (isset($_POST["erp_used_list"])) {
        $erp = $_POST["erp_used_list"];
    }

    if (isset($_POST["annual_freight_cost"])) {
        $annual_cost = $_POST["annual_freight_cost"];
    }

    if (isset($_POST["company_desc"])) {
        $company_desc = $_POST["company_desc"];
    }

    if ($firstName!=="" && $lastName!=='' && $companyName!=='' && $companyEmail!=='' && $erp!=='' && $annual_cost!=='' && $company_desc!=='') {
        $query = "INSERT INTO demo_requests (id, first_name, last_name, company_name, company_email, erp, annual_cost, company_desc) VALUES (NULL, '$firstName', '$lastName', '$companyName', '$companyEmail', '$erp', '$annual_cost', '$company_desc')";

        //Esecuzione della query
	    mysqli_query($connection, $query);
	
	    //Chisura della connessione
	    header('location: get-demo.php');

    }
?>