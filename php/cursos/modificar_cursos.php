<?php
$mysqli = new mysqli('127.0.0.1','root', '', 'liceo_michelin');

if ($mysqli->connect_errno) {
	echo "lo sentimos, este sitio web esta experimentando problemas.";
	
	exit;
}
else{

$cod_curso = $_POST['cod_curso'];
$descripcion = $_POST['descripcion'];
$n_estudiantes= $_POST['n_estudiantes'];

 $sql = " update cursos set descripcion='".$descripcion."', n_estudiantes='".$n_estudiantes."' where cod_curso= '".$cod_curso."'";
 
  $mysqli->query($sql);
  echo "los datos fueron ingresados correctamemte";
  echo("<h1>REGISTRO MODIFICADO</h1><br>");	
  echo("<img src=/michelin/imagenes/mickey.png width=20%><br>");
  echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
  
}
$mysqli->close();
?>