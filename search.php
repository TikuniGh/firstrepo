<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<link rel="stylesheet" href="stylesheet.css">

<body>
    <a href="index.html"><img src="atu.png" style="height: 80px; font-size: 120px;"></a>
<form method="post" action="">
<label for="">Enter search term</label>
<input type="text" name="query" id="">
<input type="submit" value="Search">
</form>
<br>
<br>
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

<a href="index.html"><p>Home</p></a>
</body>
<footer style="text-align: center;">
    <div class="glyphicon-copyright-mark new"><br>
        <p class="glyphicon-copyright-mark text-white text-center">&copy; October 2021 Copyright : Emmanuel A.K Menkah</p>
    </div>
</footer>
</html>

