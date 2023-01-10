<?php
$mysqli = new mysqli('127.0.0.1','root', '', 'liceo_michelin');

if ($mysqli->connect_errno) {
	echo "lo sentimos, este sitio web esta experimentando problemas.";
	
	exit;
}
else
{
	
$cod_curso = $_POST['cod_curso'];
$curso = $_POST['curso'];
$descripcion = $_POST['descripcion'];
$cod_emp = $_POST['cod_emp'];
$n_estudiantes= $_POST['n_estudiantes'];

 $sql = "INSERT INTO cursos Values ('".$cod_curso."','".$curso."','".$descripcion."','".$cod_emp."','".$n_estudiantes."')";
 
  $mysqli->query($sql);
  echo "los datos se ingresan correctamente<br>";
  echo("<h1>REGISTRO GRAVADO</h1><br>");	
  echo("<img src=/michelin/imagenes/pajaro.jpg width=20%><br>");
	echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
}
$mysqli->close();
?>
