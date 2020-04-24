<?php
//waar staat de server
$host = "localhost";

//database naam
$dbname = "dropdown";

//gebruikernaam
$user = "root";

//wachtwoord
$password = "";

$pconn = new PDO("mysql:host=$host;dbname=$dbname",
    "root", "") or die();

?>

<!--####### connectie met me database -->
