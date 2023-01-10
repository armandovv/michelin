<?php
//Conectar a la base de datos(escuela).
error_reporting(0);
$permod = new mysqli('127.0.0.1','root','','liceo_michelin');

if ($permod->connect_errno) {
    echo "lo sentimos, este sitio web esta experimentando problemas.<br>";
	echo "error: Fallo al conectarse a mysql debido a:<br>";
	echo "errno:".$permod->connect_errno."<br>";
    exit;
}
else{
	echo "Coneccion correcta<br><br>";
	$cod_cargo=$_POST['cod_cargo'];

 $sql = "delete from cargos where cod_cargo='".$cod_cargo."';";
  $permod->query($sql);
  echo "los datos fueron borrados correctamemte";
}
echo("<img src=/michelin/imagenes/lucas.jpg width=20%><br>");
echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>	";
$permod->close();

?>