<?php

$mysqli = new mysqli('localhost', 'kimkla12', '', 'kimkla12_db'); // (HOST, ANVÄNDARE, LÖSEN, DATABASNAMN)

if (mysqli_connect_error()) { 
	echo "Kontakten misslyckades: " . mysqli_connect_error() . "<br />"; 
	exit(); 
} 
$mysqli->set_charset("utf8");

?>