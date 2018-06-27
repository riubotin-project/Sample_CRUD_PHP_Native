<?php
// used to connect to the database
$host = "fdb21.awardspace.net";
$db_name = "2747414_database";
$username = "2747414_database";
$password = "2747414_database";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>