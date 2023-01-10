<?php
$mysqli = new mysqli('127.0.0.1','root', '', 'liceo_michelin');

if ($mysqli->connect_errno) {
	echo "lo sentimos, este sitio web esta experimentando problemas.";
	
	exit;
}
else{

$cod_reporte = $_POST['cod_reporte'];
$cod_est = $_POST['cod_est'];
$cod_emp = $_POST['cod_emp'];
$cod_curso = $_POST['cod_curso'];
$periodo= $_POST['periodo'];
$N1 = $_POST['N1'];
$N2 = $_POST['N2'];
$N3 = $_POST['N3'];
$definitiva = $_POST['definitiva'];

 $sql = " update reportes set cod_emp='".$cod_emp."', cod_curso='".$cod_curso."', periodo='".$periodo."', N1='".$N1."', N2='".$N2."', N3='".$N3."', definitiva='".$definitiva."' where cod_est= '".$cod_est."' and cod_reporte= '".$cod_reporte."'";
 
  $mysqli->query($sql);
  echo "los datos fueron ingresados correctamemte";
  echo("<h1>REGISTRO MODIFICADO</h1><br>");	
  echo("<img src=/michelin/imagenes/mickey.png width=20%><br>");
  echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
  
}
$mysqli->close();
?>