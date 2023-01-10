<?php
$mysqli = new mysqli('127.0.0.1','root', '', 'liceo_michelin');

if ($mysqli->connect_errno) {
	echo "lo sentimos, este sitio web esta experimentando problemas.";
	
	exit;
}
else{

$cod_emp = $_POST["cod_emp"];
$cod_nomina = $_POST["cod_nomina"];
$horas_trabajadas = $_POST["horas_trabajadas"];
$descuento = $_POST["descuento"];
$aporte_eps = $_POST["aporte_eps"];
$aporte_caja = $_POST["aporte_caja"];
$aporte_pension = $_POST["aporte_pension"];

 $sql = " update nomina set horas_trabajadas='".$horas_trabajadas."', descuento='".$descuento."', aporte_eps='".$aporte_eps."', aporte_caja='".$aporte_caja."', aporte_pension='".$aporte_pension."' where cod_emp= '".$cod_emp."' and cod_nomina= '".$cod_nomina."'";
 
  $mysqli->query($sql);
  echo "los datos fueron ingresados correctamemte";
  echo("<h1>REGISTRO MODIFICADO</h1><br>");	
  echo("<img src=/michelin/imagenes/mickey.png width=20%><br>");
  echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
  
}
$mysqli->close();
?>