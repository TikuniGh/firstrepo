

<?php
//include php conection page
include('connection.php');

//sql
$sql ="SELECT * FROM tblmember";

//execute sql statement
$results = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stylesheet.css">

<style>

  
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
h4{
  text-align: center ;
  position: relative;

}
</style>
</head>
<body>
<a href="index.html"><img src="atu.png" style="height: 80px; font-size: 120px;"></a>

<h2>Membership List</h2>
<h4>Total number of Registered members:
   <?php

foreach($conn->query('SELECT COUNT(*) FROM tblmember') as $row){
  echo "<tr>";
  echo "<td>" .$row['COUNT(*)']."</td>";
  echo "</tr>";

}

  ?>
</h4>
<h4>Total number of Males:
<?php

foreach($conn->query('SELECT COUNT(*)  FROM tblmember WHERE gender like "%M%" ') as $row){
  echo "<tr>";
  echo "<td>" .$row['COUNT(*)']."</td>";
  echo "</tr>";

}

  ?>
</h4>
<h4>Total number of Females: 
<?php

foreach($conn->query('SELECT COUNT(*)  FROM tblmember WHERE gender like "%F%" ') as $row){
  echo "<tr>";
  echo "<td>" .$row['COUNT(*)']."</td>";
  echo "</tr>";

}

  ?>
</h4>

 
<?php
    // $sql ="SELECT * FROM tblmember ORDER BY last_name";
  
    //   if(isset($_POST['button'])) {
    //       echo "$sql";
    //   }
  //?>
    
  <form method="post">
      <input type="submit" name="button"
              value="Sort alpbethically"/>
  </form>




<table>
  <tr>
    <th>Member ID:</th>
    <th>First Name:</th>
    <th>Last Name:</th>
    <th>Email Address:</th>
    <th>Gender:</th>
    <th>Phone Number:</th>
    <th>Location:</th>
    <th>Region:</th>
  </tr>
  <?php
  foreach($results as $row){
      echo "<tr>";

      echo "<td>".$row['member_id']."</td>";
      echo "<td>".$row['first_name']."</td>";
      echo "<td>".$row['last_name']."</td>";
      echo "<td>".$row['email']."</td>";
      echo "<td>".$row['gender']."</td>";
      echo "<td>".$row['phone']."</td>";
      echo "<td>".$row['location']."</td>";
      echo "<td>".$row['region']."</td>";

      echo "</tr>"; 

    }
  
    ?>

</table>


<a href="index.html"><p><h2>Home</h2> </p></a>
</body>
<footer style="text-align: center;">
    <div class="glyphicon-copyright-mark new"><br>
        <p class="glyphicon-copyright-mark text-white text-center">&copy; October 2021 Copyright : Emmanuel A.K Menkah</p>
    </div>
</footer>
</html>
<script>
    document.getElementById("myBtn").addEventListener("click",function(){
      document.getElementById("sort").ORDER BY = "ReArrange";
    });
</script>
