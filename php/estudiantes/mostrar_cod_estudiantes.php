<div id='cualquier'>

<center><h2>ESTUDIANTE</h2></center>
<center>
<table border=1>
<th width="100" bgcolor="#F781BE">COD</th>
<th width="100" bgcolor="#F781BE">NOM</th>
<th width="100" bgcolor="#F781BE">APE</th>
<th width="100" bgcolor="#F781BE">T.DO</th>
<th width="100" bgcolor="#F781BE">DOC</th>
<th width="100" bgcolor="#F781BE">NOM</th>
<th width="100" bgcolor="#F781BE">APE</th>
<th width="100" bgcolor="#F781BE">DOC</th>
<th width="100" bgcolor="#F781BE">DIR</th>
<th width="100" bgcolor="#F781BE">FIJ</th>
<th width="100" bgcolor="#F781BE">CEL</th>
<th width="100" bgcolor="#F781BE">EMA</th>
<th width="100" bgcolor="#F781BE">GRA</th>
<th width="100" bgcolor="#F781BE">INS</th>
<th width="100" bgcolor="#F781BE">EPS</th>
<th width="100" bgcolor="#F781BE">VAC</th>
<th width="100" bgcolor="#F781BE">CUR</th>

</table>
</center>

<?php

error_reporting(0);

$mysqli = new mysqli('127.0.0.1','root','','liceo_michelin');

if ($mysqli->connect_errno) {
	echo " LO SENTIMOS, ESTE SITIO WEB ESTA EXPERIMENTANDO PROBLEMAS  <BR>";
echo "error: Fallo al conectarse a mysql debido a : <br>";
    echo"errno: " . $mysqli->connect_errno . "<br>";
exit;
}
else
{
$documento= $_POST["documento"];	
//echo "la coneccion fue exitosa";

$sql = " select *from estudiante where documento='".$documento."'";

$result=mysqli_query($mysqli, $sql);  

if (mysqli_num_rows($result)==0)
{
	echo '<script>alert("REGISTRO NO ENCONTRADO VERIFIQUE")</script>';
}
else

while ($mostrar=mysqli_fetch_array($result))
{

echo "<center>";	
echo "<table border=1>";  
 
  echo "<th width=100>",$mostrar['cod_est']."</th>";
	echo "<th width=100>",$mostrar['nombres']."</th>";
    echo "<th width=100>",$mostrar['apellidos']."</th>";
	echo "<th width=100>",$mostrar['tipo_documento']."</th>";
	echo "<th width=100>",$mostrar['documento']."</th>";
	echo "<th width=100>",$mostrar['nombre_acudiente']."</th>";
	echo "<th width=100>",$mostrar['apellido_acudiente']."</th>";
	echo "<th width=100>",$mostrar['doc_acudiente']."</th>";
	echo "<th width=100>",$mostrar['direccion']."</th>";
	echo "<th width=100>",$mostrar['telefono']."</th>";
	echo "<th width=100>",$mostrar['celular']."</th>";
	echo "<th width=100>",$mostrar['email']."</th>";
	echo "<th width=100>",$mostrar['ultimo_grado_cursado']."</th>";
	echo "<th width=100>",$mostrar['institucion']."</th>";
	echo "<th width=100>",$mostrar['eps']."</th>";
	echo "<th width=100>",$mostrar['vacunas']."</th>";
	echo "<th width=100>",$mostrar['cod_curso']."</th>";
	
}  
echo "</table>";
echo "</center>";
echo "la coneccion fue exitosa"; 

}
//
echo "<center><button type=submit onclick='history.go(-1);'><img src=/michelin/imagenes/c.png width=42 height=42 style=vertical-align:middle>ATRAS</button></center>";
?>

</div> 
<center><a href="javascript:imprSelec('cualquier')">IMPRIMIR</a>
	<script language="Javascript">
	function imprSelec (cualquier)
	{ 
	var ficha=document.getElementById(cualquier);
	var ventimp=window.open('','popimpr');
	ventimp.document.write( ficha.innerHTML );
	ventimp.document.close();
	ventimp.print();
	ventimp.close();
	}
	</script>	</center>