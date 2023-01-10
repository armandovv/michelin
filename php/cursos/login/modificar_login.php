<?php
$mysqli = new mysqli('127.0.0.1','root', '', 'liceo_michelin');

if ($mysqli->connect_errno) {
	echo "lo sentimos, este sitio web esta experimentando problemas.";
	
	exit;
}
else{

$id = $_POST['id'];
$realname = $_POST['realname'];
$mail = $_POST['mail'];
$pass = $_POST['pass'];
$rpass = $_POST['rpass'];
$rol = $_POST ['rol'];


 $sql = " update login set id='".$id."', realname='".$realname."', mail='".$mail."', pass='".$pass."', rpass='".$rpass."', rol='".$rol."'";
 
  $mysqli->query($sql);
  echo "los datos fueron ingresados correctamemte";
  echo("<h1>REGISTRO MODIFICADO</h1><br>");	
  echo("<img src=/michelin/imagenes/mickey.png width=20%><br>");
  echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
  
}
$mysqli->close();
?>