<?php
$mysqli = new mysqli('127.0.0.1','root', '', 'liceo_michelin');

if ($mysqli->connect_errno) {
	echo "lo sentimos, este sitio web esta experimentando problemas.";
	
	exit;
}
else{
	
$cod_nomina = $_POST['cod_nomina'];
$cod_emp = $_POST['cod_emp'];
$cod_cargo = $_POST['cod_cargo'];
$horas_trabajadas = $_POST['horas_trabajadas'];
$valor_horas_trabajadas = $_POST['valor_horas_trabajadas'];
$descuento = $_POST['descuento'];
$aporte_eps = $_POST['aporte_eps'];
$aporte_caja = $_POST['aporte_caja'];
$aporte_pension = $_POST['aporte_pension'];
$neto_a_pagar = $_POST['neto_a_pagar'];


 $sql = "INSERT INTO nomina Values ('".$cod_nomina."','".$cod_emp."','".$cod_cargo."','".$horas_trabajadas."','".$valor_horas_trabajadas."','".$descuento."','".$aporte_eps."','".$aporte_caja."','".$aporte_pension."','".$neto_a_pagar."')";
 
  $mysqli->query($sql);
  echo "los datos fueron ingresados correctamemte";
  echo("<h1>REGISTRO GRAVADO</h1><br>");	
  echo("<img src=/michelin/imagenes/pajaro.jpg width=20%><br>");
  echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
}
$mysqli->close();
?>