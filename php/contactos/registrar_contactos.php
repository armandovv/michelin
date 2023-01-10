<?php
//Conectar a la base de datos(liceo_michelin).
$permoda=new mysqli('127.0.0.1','root','','liceo_michelin');

if ($permoda->connect_errno){
	echo "Lo sentimos, este sitio web esta experimentando problemas";
	exit;
}
else{
	echo "Conexion correcta<br><br>";
	
	$cod=$_POST['cod'];
    $nombres=$_POST['nombres'];
	$apellidos=$_POST['apellidos'];
	$telefono=$_POST['telefono'];
	$correo=$_POST['correo'];
	$curso=$_POST['curso'];
	$comentarios=$_POST['comentarios'];
	
	$sql="INSERT INTO contactos Values('".$cod."','".$nombres."','".$apellidos."','".$telefono."','".$correo."','".$curso."','".$comentarios."')";
	$permoda->query($sql);
	echo("<h1>REGISTRO GRAVADO</h1><br>");	
	echo("<img src=/michelin/imagenes/lucas.jpg width=20%><br>");
	echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
}

?>