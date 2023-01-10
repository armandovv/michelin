<?php
$mysqli = new mysqli('127.0.0.1','root', '', 'liceo_michelin');

if ($mysqli->connect_errno) {
	echo "lo sentimos, este sitio web esta experimentando problemas.";
	
	exit;
}
else{
	
$cod_cargo = $_POST["cod_cargo"];
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$salario = $_POST["salario"];


 $sql = "INSERT INTO cargos Values ('".$cod_cargo."','".$nombre."','".$descripcion."','".$salario."')";
 
  $mysqli->query($sql);
  echo "los datos fueron ingresados correctamemte";
  echo("<h1>REGISTRO GRAVADO</h1><br>");	
  echo("<img src=/michelin/imagenes/pajaro.jpg width=20%><br>");
  echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
}
$mysqli->close();
?>