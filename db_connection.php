<?php 
$sname= "localhost";
$emailadres= "root";
$wachtwoord= "";

$db_name = "basketbal";

$conn = mysqli_connect($sname, $emailadres, $wachtwoord, $db_name);

if (!$conn) {
    echo "Connectie niet gelukt";
}

?>