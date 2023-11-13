<?php
// used to connect to the database
$host = "kiouni.db.elephantsql.com";
$db_name = "tiwormkn";
$username = "tiwormkn";
$password = "h3J0Mjbin1wd3d0H5OSjjHvEkVHgDKNp";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>