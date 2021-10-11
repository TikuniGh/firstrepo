<?php
$hostname ='localhost';
$dbname='db_membership';
$username='root';
$password='';


/*mysql_pconnect($hostname,$username, $password) or trigger_error(mysql_error(),E_USER_ERROR);

if($conn)
    echo "Connection to database is successful.";
else{
    echo "Sorry, connection to the database was unsucessful.";
    }
*/


try{
    $conn = new PDO("mysql: host=$hostname; dbname=$dbname",$username, $password);
    $conn->setAttribute(PDO:: ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);

    //echo "Connection to database is successful";
    
}
catch (PDOException $e)
{
    //echo "Sorry, connection to the database was unsucessful.";
}

 


?>