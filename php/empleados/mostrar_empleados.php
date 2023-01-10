<div id='cualquier'>

<center><h2>REGISTROS DE EMPLEADOS</h2></center>
<center>
<table border=1>
<th width="100" bgcolor="#2E9AFE">COD</th>
<th width="100" bgcolor="#2E9AFE">NOM</th>
<th width="100" bgcolor="#2E9AFE">APE</th>
<th width="100" bgcolor="#2E9AFE">T.DO</th>
<th width="100" bgcolor="#2E9AFE">DOC</th>
<th width="100" bgcolor="#2E9AFE">DIR</th>
<th width="100" bgcolor="#2E9AFE">TEL</th>
<th width="100" bgcolor="#2E9AFE">EST</th>
<th width="100" bgcolor="#2E9AFE">EPS</th>
<th width="100" bgcolor="#2E9AFE">CAJ</th>
<th width="100" bgcolor="#2E9AFE">TIL</th>
<th width="100" bgcolor="#2E9AFE">CAR</th>
<th width="100" bgcolor="#2E9AFE">CUR</th>

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
//echo "la coneccion fue exitosa";

$sql = " select *from empleados";

$result=mysqli_query($mysqli, $sql);  


while ($mostrar=mysqli_fetch_array($result))
{

echo "<center>";	
echo "<table border=1>";  
 
    echo "<th width=100>",$mostrar['cod_emp']."</th>";
	echo "<th width=100>",$mostrar['nombres']."</th>";
    echo "<th width=100>",$mostrar['apellidos']."</th>";
	echo "<th width=100>",$mostrar['tipo_documento']."</th>";
	echo "<th width=100>",$mostrar['documento']."</th>";
	echo "<th width=100>",$mostrar['direccion']."</th>";
	echo "<th width=100>",$mostrar['telefono']."</th>";
	echo "<th width=100>",$mostrar['estado_civil']."</th>";
	echo "<th width=100>",$mostrar['EPS']."</th>";
	echo "<th width=100>",$mostrar['caja_compensacion']."</th>";
	echo "<th width=100>",$mostrar['titulo']."</th>";
	echo "<th width=100>",$mostrar['cod_cargo']."</th>";
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