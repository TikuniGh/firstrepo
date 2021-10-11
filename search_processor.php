<?php
require "./connection.php";

if ($_SERVER["REQUEST_METHOD"]==="POST"){
    $searchTerm = $_POST["query"];

    if(empty(trim($searchTerm))){
        echo "No search term supplied";
        exit;
    }
    $stmt = $conn->prepare("SELECT first_name, last_name, email   FROM tblmember
     where first_name LIKE '%$searchTerm%'
     OR  last_name LIKE '%$searchTerm%'  
     OR  email LIKE '%$searchTerm%'  

     ");

    $stmt->execute();

    $results = $stmt->fetchAll();
    if (empty($results)){
        echo "No records found";

    } else {
        echo "<br><br>";
        echo "Your Search returned the following:<br>";

        foreach ($results as $result){
            echo "<p> $result[0]  $result[1] &nbsp&nbsp <br> $result[2] </p>";
        }
    }
}

?>