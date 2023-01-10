<?php
$mysqli = new mysqli('127.0.0.1','root', '', 'liceo_michelin');

if ($mysqli->connect_errno) {
	echo "lo sentimos, este sitio web esta experimentando problemas.";
	
	exit;
}
else
{
	
$cod_reporte = $_POST['cod_reporte'];
$cod_est = $_POST['cod_est'];
$cod_emp = $_POST['cod_emp'];
$cod_curso = $_POST['cod_curso'];
$periodo= $_POST['periodo'];
$N1 = $_POST['N1'];
$N2 = $_POST['N2'];
$N3 = $_POST['N3'];
$definitiva = $_POST['definitiva'];

 $sql = "INSERT INTO reportes Values ('".$cod_reporte."','".$cod_est."','".$cod_emp."','".$cod_curso."','".$periodo."','".$N1."','".$N2."','".$N3."','".$definitiva."')";
 
  $mysqli->query($sql);
  echo "los datos se ingresan correctamente<br>";
  echo("<h1>REGISTRO GRAVADO</h1><br>");	
  echo("<img src=/michelin/imagenes/pajaro.jpg width=20%><br>");
	echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
}
$mysqli->close();
?>
