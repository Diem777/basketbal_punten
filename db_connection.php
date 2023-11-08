<?php

$sname= "localhost";
$unmae= "root";
$herhaal_wachtwoord ="";

$db_name = "gebruikers_basketbal";

$conn = mysqli_connect($sname, $unmae, $herhaal_wachtwoord, $db_name);

if (!$conn) {
    echo "Connection failded!";
}