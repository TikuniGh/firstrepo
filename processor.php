

<!DOCTYPE html>

<head>
<link rel="stylesheet" href="stylesheet.css">
</head>
<body>
<a href="index.html"><img src="atu.png" style="height: 80px; font-size: 120px;"></a>
<?php
//include connection file
include('connection.php');

//pick data from post array
//and assign it to a variable
$first_name = $_POST['first_name'];
$last_name  = $_POST['last_name'];
$email = $_POST['email'];
$gender  = $_POST['gender'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$region = $_POST['region'];

$sql = "INSERT INTO tblmember(first_name, last_name, email, gender, phone, location, region  ) VALUES('$first_name', '$last_name', '$email', '$gender', '$phone', '$location', '$region'  )";


$conn->exec($sql);

// $sql = "SELECT * FROM tblmember";
// $mysqlStatus = $mysql->query($sql);
// $rows_count_value = mysql-num_rows($mysqlStatus);

// echo $rows_count_value; 

// $mysql->close();

if($conn) {
    echo"<h2> Data entered successfully </h2>";
}
else{
    echo "<h2> Sorry, Could not enter data. Check and try again </h2>";
}


?>
</body>
<a href="index.html"><p>Return to Home Page</p></a>
</html>
