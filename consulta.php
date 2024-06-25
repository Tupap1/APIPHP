<?php 

require "conexion.php"; 

$sql="SELECT * FROM `peces` WHERE 1"; 

$respuesta=mysqli_query($con,$sql); 

if(!$respuesta){die("Error en la consulta");} 

$resJson=array(); 

while($r=$respuesta->fetch_assoc()){ 

array_push($resJson,$r); 

} 

mysqli_close($con); 

echo json_encode($resJson); 

?> 
