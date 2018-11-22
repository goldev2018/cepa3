<?php
$host = "localhost";
$db_name = "cepa";
$username = "root";
$password = "";
// $host = "energ029.mysql.guardedhost.com";
// $db_name = "energ029_cepa";
// $username = "energ029_cepa";
// $password = "cepa123Pass";

try {
   $db= new PDO("mysql:host={$host};dbname={$db_name};",$username,$password) or die("Could not connect database");
}
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>
