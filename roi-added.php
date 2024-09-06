<?php 
    require_once("connection.php");

    if(isset($_POST["profit"])){
        $gross_profit = $_POST["profit"];
    }
    if(isset($_POST["cost-investment"])){
        $cost_of_investment = $_POST["cost-investment"];
    }

    if($gross_profit!=="" && $cost_of_investment!==""){
        $query = "INSERT INTO roi (id, profit, cost_of_investment, net_profit, ROI) VALUES (NULL, $gross_profit, $cost_of_investment, $gross_profit - $cost_of_investment, (($gross_profit - $cost_of_investment) / $cost_of_investment) * 100)";
        mysqli_query($connection, $query);

        header("location: roi-result.php");
    }

?>