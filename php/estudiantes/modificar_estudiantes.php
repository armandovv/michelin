<?php
$mysqli = new mysqli('127.0.0.1','root', '', 'liceo_michelin');

if ($mysqli->connect_errno) {
	echo "lo sentimos, este sitio web esta experimentando problemas.";
	
	exit;
}
else{

$cod_est = $_POST['cod_est'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$tipo_documento = $_POST['tipo_documento'];
$documento = $_POST['documento'];
$nombre_acudiente = $_POST ['nombre_acudiente'];
$apellido_acudiente = $_POST['apellido_acudiente'];
$doc_acudiente = $_POST['doc_acudiente'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$ultimo_grado_cursado = $_POST['ultimo_grado_cursado'];
$institucion = $_POST['institucion'];
$eps = $_POST['eps'];
$vacunas = $_POST['vacunas'];
$cod_curso = $_POST['cod_curso'];

 $sql = " update estudiante set cod_est='".$cod_est."', nombres='".$nombres."', apellidos='".$apellidos."', tipo_documento='".$tipo_documento."', documento='".$documento."', nombre_acudiente='".$nombre_acudiente."', apellido_acudiente='".$apellido_acudiente."', doc_acudiente='".$doc_acudiente."', direccion='".$direccion."', telefono='".$telefono."', celular='".$celular."', email='".$email."', ultimo_grado_cursado='".$ultimo_grado_cursado."', institucion='".$institucion."', eps='".$eps."', vacunas='".$vacunas."', cod_curso='".$cod_curso."' where cod_est= '".$cod_est."' and documento='".$documento."'";
 
  $mysqli->query($sql);
  echo "los datos fueron ingresados correctamemte";
  echo("<h1>REGISTRO MODIFICADO</h1><br>");	
  echo("<img src=/michelin/imagenes/mickey.png width=20%><br>");
  echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
  
}
$mysqli->close();
?>