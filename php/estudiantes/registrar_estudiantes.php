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

 $sql = "INSERT INTO estudiante Values ('".$cod_est."','".$nombres."','".$apellidos."','".$tipo_documento."','".$documento."','".$nombre_acudiente."','".$apellido_acudiente."','".$doc_acudiente."','".$direccion."','".$telefono."','".$celular."','".$email."','".$ultimo_grado_cursado."','".$institucion."','".$eps."','".$vacunas."','".$cod_curso."')";
 
  $mysqli->query($sql);
  echo "los datos fueron ingresados correctamemte";
  echo("<h1>REGISTRO GRAVADO</h1><br>");	
  echo("<img src=/michelin/imagenes/pajaro.jpg width=20%><br>");
  echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
}
$mysqli->close();
?>