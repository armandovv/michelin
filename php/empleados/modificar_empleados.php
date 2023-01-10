<?php
$mysqli = new mysqli('127.0.0.1','root', '', 'liceo_michelin');

if ($mysqli->connect_errno) {
	echo "lo sentimos, este sitio web esta experimentando problemas.";
	
	exit;
}
else{

$cod_emp = $_POST['cod_emp'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$tipo_documento = $_POST['tipo_documento'];
$documento = $_POST['documento'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$estado_civil = $_POST['estado_civil'];
$EPS = $_POST['EPS'];
$caja_compensacion = $_POST['caja_compensacion'];
$titulo = $_POST['titulo'];
$cod_cargo = $_POST['cod_cargo'];
$cod_curso = $_POST['cod_curso'];

 $sql = " update empleados set nombres='".$nombres."', apellidos='".$apellidos."', tipo_documento='".$tipo_documento."', documento='".$documento."', direccion='".$direccion."', telefono='".$telefono."', estado_civil='".$estado_civil."', EPS='".$EPS."', caja_compensacion='".$caja_compensacion."', titulo='".$titulo."', cod_cargo='".$cod_cargo."', cod_curso='".$cod_curso."' where cod_emp= '".$cod_emp."' and documento='".$documento."'";
 
  $mysqli->query($sql);
  echo "los datos fueron ingresados correctamemte";
  echo("<h1>REGISTRO MODIFICADO</h1><br>");	
  echo("<img src=/michelin/imagenes/mickey.png width=20%><br>");
  echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
  
}
$mysqli->close();
?>