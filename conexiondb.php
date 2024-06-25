<?php 

$servername = "localhost"; 

$username = "root"; 

$password = ""; 

$database = "biometricssa"; 

$con = new mysqli($servername, $username, $password, $database); 

if ($con->connect_error) { 

die("No se pudo conectar a la base de datos: " . $con->connect_error); 

} 
?> 
